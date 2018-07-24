<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends MY_model {

    private $table = 'customer_orders';

    public function __construct() {
        parent::__construct();
    }

    public function place_wallet_order(array $postData) {
        //print_r($postData); die;

        $acct_balance = $postData['acct_balance'];
        $payment_method = $postData['payment_method'];
        unset($postData['acct_balance']);
        unset($postData['payment_method']);

        $total_bill = $postData['amount']['total_bill'];
        $total_discount = $postData['amount']['total_discount'];
        $total_delivery_charge = $postData['amount']['total_delivery_charge'];
        $net_bill = $postData['amount']['net_bill'];
        
        $supplierArray = array();
        foreach ($postData['products'] as $prodRow) {
            if (!isset($supplierArray[$prodRow['supplier_id']])) {
                $supplierArray[$prodRow['supplier_id']] = 0;
            }
            if (isset($supplierArray[$prodRow['supplier_id']])) {
                $supplierArray[$prodRow['supplier_id']] = $supplierArray[$prodRow['supplier_id']] + ($prodRow['total_amount'] - $prodRow['total_discount']);
            }
        }
        if($payment_method == '1') {
            $this->db->trans_start();

            // debit from customer account
            $acct_balance = $acct_balance - $net_bill;

            $cutxnData = array(
                'txn_reference' => $postData['order_id'] . ' order placed',
                'txn_type' => 'debit',
                'txn_amount' => $net_bill,
                'uacct_balance' => $acct_balance,
                'customer_id' => $postData['customer_id']
            );
            $cutxnId = $this->insert_data($cutxnData, 'balance_transaction');
            $response['customer']['txn_id'] = $cutxnId;
            $response['customer']['txn_amount'] = $net_bill;

            $this->update_data(array('acct_balance' => $acct_balance), 'customer_master', array('id' => $postData['customer_id']));

            // credit to suppliers account 
            foreach ($supplierArray as $supplier_id => $txn_amount) {
                $suData = $this->get_row_byid('user_account', array('uacct_id' => $supplier_id), array('acct_balance')
                );

                if (empty($suData)) {
                    return false;
                }
                $uacct_balance = $suData->acct_balance + $txn_amount;

                $sutxnData = array(
                    'txn_reference' => $postData['order_id'] . ' order placed',
                    'txn_type' => 'credit',
                    'txn_amount' => $txn_amount,
                    'uacct_balance' => $uacct_balance,
                    'uacct_id' => $supplier_id
                );

                $sutxnId = $this->insert_data($sutxnData, 'balance_transaction');
                $this->update_data(array('acct_balance' => $uacct_balance), 'user_account', array('uacct_id' => $supplier_id));
                $supplierArray[$supplier_id] = $sutxnId;
                $response['supplier'][$supplier_id]['txn_id'] = $sutxnId;
                $response['supplier'][$supplier_id]['txn_amount'] = $txn_amount;
                unset($sutxnData);
            }
        }
        
        if($payment_method == '2') {
            $this->db->trans_start();
        }
        
        // make master order entry
        $orderData = array(
            'order_id' => $postData['order_id'],
            'total_bill' => $total_bill,
            'total_discount' => $total_discount,
            'delivery_charge' => $total_delivery_charge,
            'address_id' => $postData['address_id'],
            'customer_id' => $postData['customer_id'],
            'medium' => $postData['medium'],
            'payment_mode' => $payment_method
        );
        
        if($payment_method == '1') {
            $orderData['txn_id'] = $cutxnId;
        }
        $orderPk = $this->insert_data($orderData, $this->table);
        $response['order_pk'] = $orderPk;
        $response['order_id'] = $postData['order_id'];
        unset($orderData);

        // make order details entry
        $subSql = "INSERT INTO order_details (prod_id,prod_title,prod_price,price_unit,prod_discount,flat_discount,prod_count,total_amount,total_discount,delivery_charge,sale_id,order_id,uacct_id";
        
        if($payment_method == '1') {
            $subSql .= ",txn_id";
        }
        
        $subSql .= ") VALUES ";

        $queryNode = array();
        foreach ($postData['products'] as $prodRow) {
            $temp = $prodRow['product_id'] . ',';
            $temp .= $this->db->escape("{$prodRow['title']}") . ',';
            $temp .= $prodRow['price'] . ',';
            $temp .= $this->db->escape("{$prodRow['unit']}") . ',';
            $temp .= (isset($prodRow['discount'])) ? $this->db->escape("{$prodRow['discount']}") . ',' : "''" . ',';
            $temp .= (isset($prodRow['flat_discount'])) ? $this->db->escape("{$prodRow['flat_discount']}") . ',' : "''" . ',';
            $temp .= $prodRow['quantity'] . ',';
            $temp .= $prodRow['total_amount'] . ',';
            $temp .= $prodRow['total_discount'] . ',';
            $temp .= $prodRow['delivery_charge'] . ',';
            $temp .= (isset($prodRow['sale_id'])) ? $this->db->escape("{$prodRow['sale_id']}") . ',' : "NULL" . ',';
            $temp .= $orderPk . ',';
            $temp .= $prodRow['supplier_id'];
            
            if($payment_method == '1') {
                $temp .=  ",".$supplierArray[$prodRow['supplier_id']];
            }
            array_push($queryNode, "(" . $temp . ")");
            unset($temp);
        }
        unset($supplierArray);

        $subSql .= implode(',', $queryNode);
        $this->db->query($subSql);
        unset($queryNode);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        }

        return $response;
    }
    
    public function get_products(array $productArray, $fieldArray = array()) {
        
        return $this->db->select($fieldArray)
                ->from('product_master')
                ->where_in('prod_id', $productArray)
                ->get()->result_array();
    }
    
    public function get_orders(array $postData, $fieldArray = array('*')) {    
       $this->db->select($fieldArray)
                ->from($this->table.' co')
                ->join('customer_address_master cam', 'cam.id=co.address_id', 'LEFT')
                ->where($postData['condition'])
                ->limit($postData['limit'], $postData['offset']);
                
       
       return $this->db->get()->result_array();
    }
    
    public function get_order_details(array $postData, $fieldArray = array('*')) {    
       $this->db->select($fieldArray)
                ->from($this->table.' co')
                ->join('order_details od', 'od.order_id=co.id')
                ->join('product_master pm', 'pm.prod_id=od.prod_id', 'LEFT')
                ->join('company_profile cp', 'cp.uacct_id=od.uacct_id', 'LEFT')
                ->where($postData['condition']);
                
//       die($this->db->get_compiled_select());
       return $this->db->get()->result_array();
    }

}
