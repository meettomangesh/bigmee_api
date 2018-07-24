<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends BASE_Api {

    private $customer_id;

    public function __construct() {
        parent::__construct();


        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');

        // initialize core api dependancy 
        parent::valid_customer($this->customer_id);
        $this->load->model('order_model', 'order');
    }

    public function paymentoptions_post() {
        $paymentOtions = $this->order->get_data_by('customer_payment_method', array('status' => '1'), array('id', 'name', 'icon', 'config'));

        foreach ($paymentOtions as $key => $data) {
            if (!empty($paymentOtions[$key]['config'])) {
                $paymentOtions[$key]['config'] = json_decode($paymentOtions[$key]['config'], TRUE);
            } else {
                $paymentOtions[$key]['config'] = array();
            }
        }

        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $paymentOtions));
    }

    // balance_transaction uacct_id alter null, add customer_id field as null
    public function place_put() {
        $payloadData = json_decode($this->put('payload'), TRUE);
        $payment_method = $this->put('payment_method');
        $address_id = $this->put('address_id');
        $medium = $this->put('medium');

        if (empty($payloadData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid payload data.'));
        }

        // validates json payload and paramenters
        $requiredParams = array('product_id', 'quantity');
        $productArray = array();

        foreach ($payloadData as $pKey => $prodRow) {
            foreach ($requiredParams as $reqKey) {
                if (!array_key_exists($reqKey, $prodRow) || empty($prodRow[$reqKey])) {
                    $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => $reqKey . ' key required in json payload array position ' . $pKey));
                }
            }
            array_push($productArray, $prodRow['product_id']);
        }

        if (empty($payment_method)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid payment_method param.'));
        }
        if (empty($address_id)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid address_id param.'));
        }
        //if ($medium != '1' || $medium != '0') {
        if (!($medium == '1' || $medium == '0')) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid medium param.'));
        }

        $productData = $this->order->get_products($productArray, array('prod_id as product_id', 'prod_title as title', 'prod_price as price', 'price_unit as unit ', 'uacct_id as supplier_id', 'prod_discount as discount', 'flat_discount', 'delivery_charge')
        );

        if (count($productData) != count($payloadData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => "Invalid product_id in json payload."));
        }

        foreach ($productData as $pKey => $prodRow) {
            $productData[$pKey]['quantity'] = $payloadData[$pKey]['quantity'];
            if ((int) $prodRow['discount'] == 0) {
                unset($productData[$pKey]['discount']);
            }
            if ((int) $prodRow['flat_discount'] == 0) {
                unset($productData[$pKey]['flat_discount']);
            }
        }

        $totalAmount = $totalDiscount = $totalDeliveryCharge = 0;

        foreach ($productData as $pKey => $prodRow) {
            if (!is_array($prodRow)) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid json payload.'));
            }

            $totalAmount = $totalAmount + ($prodRow['price'] * $prodRow['quantity']);
            $productAmount = ($prodRow['price'] * $prodRow['quantity']);

            if (isset($prodRow['flat_discount']) && !empty($prodRow['flat_discount'])) {

                if ($prodRow['flat_discount'] > $prodRow['price']) {
                    $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid product flat_discount key near array position ' . $pKey . ' in payload.'));
                }

                $totalDiscount = $totalDiscount + ($prodRow['flat_discount'] * $prodRow['quantity']);
                $productData[$pKey]['total_amount'] = ($prodRow['price'] * $prodRow['quantity']);
                $productData[$pKey]['total_discount'] = ($prodRow['flat_discount'] * $prodRow['quantity']);
            }

            if (isset($prodRow['discount']) && !empty($prodRow['discount'])) {
                $productDiscount = ($prodRow['discount'] * $prodRow['price'] / 100) * $prodRow['quantity'];
                $totalDiscount = $totalDiscount + $productDiscount;
                $productData[$pKey]['total_amount'] = ($prodRow['price'] * $prodRow['quantity']);
                $productData[$pKey]['total_discount'] = $productDiscount;
            }
            if (isset($prodRow['sale_id']) && !empty($prodRow['sale_id'])) {
                $saleData = array();
                // add sale logic here
            }

            if (!isset($productData[$pKey]['total_amount'])) {
                $productData[$pKey]['total_amount'] = $productAmount;
            }
            if (!isset($productData[$pKey]['total_discount'])) {
                $productData[$pKey]['total_discount'] = 0;
            }
            $totalDeliveryCharge = $totalDeliveryCharge + $prodRow['delivery_charge'];
            $productData[$pKey]['total_amount'] = $productData[$pKey]['total_amount'];
        }
                
        $order = FALSE;
        $acct_balance = '';
        switch ($payment_method) {
            case '1':
                $acct_balance = $this->order->get_balance($this->customer_id);

                if ($acct_balance < ($totalAmount - $totalDiscount)) {
                    $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Your account balance is low.'));
                }
            case '2':
                    $order = $this->order->place_wallet_order(
                            array('products' => $productData,
                                'amount' => array('total_bill' => $totalAmount,
                                    'total_discount' => $totalDiscount,
                                    'total_delivery_charge' => $totalDeliveryCharge,
                                    'net_bill' => ($totalAmount - $totalDiscount)+$totalDeliveryCharge),
                                'customer_id' => $this->customer_id,
                                'address_id' => $address_id,
                                'sale_id' => $this->put('sale_id'),
                                'acct_balance' => $acct_balance,
                                'order_id' => orderId(),
                                'medium' => $medium,
                                'payment_method' => $payment_method
                    ));
                break;

            default:
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid payment method.'));
                break;
        }
		//echo '<pre>'; print_r($this->cu_profile); exit;
        if ($order) {
            if(!empty($this->cu_profile->mobile)){
                $this->load->library('sms_notification');
                $this->sms_notification->textmessage = "Dear {$this->cu_profile->name}, your order {$order['order_id']} with {$productData[0]['title']} has been placed successfully.";
                $this->sms_notification->sendMessage($this->cu_profile->mobile);
                unset($this->sms_notification);
            }
            $orderData = $this->list_post($order['order_pk']);
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => array('message' => 'Order has been placed successfully.', 'data' => $orderData, 'extra' => $order)));
        } else {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Unable to place order right now, please try again after some time.'));
        }
    }

    public function list_post($order_id=NULL) {
        $postData = array(
            'limit' => ($this->post('limit')) ? $this->post('limit') : 10,
            'offset' => ($this->post('offset')) ? $this->post('offset') : 0
        );
        if($order_id != NULL) {
            $postData['condition'] = array('co.id' => $order_id);
        }else{
            $postData['condition'] = array('co.customer_id' => $this->customer_id);
        }
        $orderData = $this->order->get_orders($postData, array('co.id','co.order_id','co.total_bill','(co.total_bill-co.total_discount)+co.delivery_charge as net_bill','co.total_discount','co.delivery_charge','co.order_status','co.order_addon','cam.title','cam.city','cam.area_description','cam.pincode','cam.person_name','cam.mobile','cam.email','cam.type','cam.latitude','cam.longitude','cam.delivery_time as delivery_slot'));
            
        $fieldArray = array('od.prod_title',"CONCAT('".APP_DOMAIN."/dist/img/products/med/', pm.prod_img) as prod_img",'pm.prod_short_desc as prod_description', 'od.delivery_charge', 'od.prod_price','od.price_unit','od.prod_discount','od.flat_discount','od.prod_count','od.total_amount','od.total_discount','od.sale_id','cp.c_name as supplier_name','cp.uacct_id as supplier_id');
        
            foreach($orderData as $key => $orderRow){            
                $orderData[$key]['products'] = $this->order->get_order_details(array(
                'condition' => array('od.order_id' => $orderRow['id'])
            ), $fieldArray);
                
            $orderData[$key]['order_status'] = array(
                'status' => $orderRow['order_status'],
                'tracking_id' => '',
                'delivered_by' => '',
                'delivery_time' => ''
            );
            
            $explodeAddr = explode('^', $orderRow['area_description']);
            $orderData[$key]['address'] = array(
                'title' => $orderRow['title'],
                'city' => $orderRow['city'],
                'area_description' => $explodeAddr[0],
                'pincode' => $orderRow['pincode'],
                'person_name' => $orderRow['person_name'],
                'mobile' => $orderRow['mobile'],
                'email' => $orderRow['email'],
                'type' => $orderRow['type'],
                'latitude' => $orderRow['latitude'],
                'longitude' => $orderRow['longitude'],
                'area_street_flat' => (isset($explodeAddr[1])) ? $explodeAddr[1] : '',
                'delivery_slot' => $orderRow['delivery_slot']
            );
            $removeKeys = array('delivery_slot','area_description','title','city','pincode','person_name','mobile','email','type','latitude','longitude');
            foreach($removeKeys as $nKey) {
               unset($orderData[$key][$nKey]);
            }
            unset($removeKeys);
        }
        if($order_id != NULL) {
            return $orderData;
        }else{
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $orderData));
        }
    }

}
