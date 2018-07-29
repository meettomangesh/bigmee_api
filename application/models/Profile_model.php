<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends MY_model {

    private $table = 'customer_master';

    public function __construct() {
        parent::__construct();
    }

    public function add_active_balance(array $postData) {
        $acctData = $this->get_row_byid($this->table, array('id' => $postData['customer_id']), array('acct_balance'));
        $response['acct_balance'] = $acctData->acct_balance + $postData['amount'];

        $this->db->trans_start();

        $txnData = array(
            'txn_type' => 'credit',
            'txn_reference' => 'payment added',
            'txn_extrainfo' => $postData['payment_reference'],
            'txn_amount' => $postData['amount'],
            'uacct_balance' => $response['acct_balance'],
            'customer_id' => $postData['customer_id'],
            'payment_method' => $postData['payment_method']
        );

        $response['txn_id'] = $this->insert_data($txnData, 'balance_transaction');
        $this->update_data(array('acct_balance' => $response['acct_balance']), $this->table, array('id' => $postData['customer_id']));

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        }
        return $response;
    }

    public function transaction_list(array $postData) {
        $fieldArray = array('txn_id', 'txn_type', 'txn_amount', 'balance_type', 'uacct_balance', 'txn_reference', 'txn_addon as txn_date');

        $from_date = $postData['where']['from_date'] . ' 00:00:00';
        $to_date = $postData['where']['to_date'] . ' 23:59:59';
        unset($postData['where']['from_date']);
        unset($postData['where']['to_date']);

        $this->db->select($fieldArray)
                ->from('balance_transaction')
                ->where("txn_addon BETWEEN '$from_date' AND '$to_date'");
        $this->db->group_start();
        if (!empty($postData['where'])) {
            $this->db->where($postData['where']);
        }
        $this->db->group_end();
        if (!empty($postData['order_by'])) {
            $this->db->order_by($postData['order_by'][0], $postData['order_by'][1]);
        }

        $this->db->limit($postData['limit'], $postData['offset']);

//        die($this->db->get_compiled_select());
        return $this->db->get()->result_array();
    }

}
