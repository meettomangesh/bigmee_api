<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TelecomApi extends BASE_Api {

    const CART_FLAG = 1;
    const BASE_URL = 'https://www.bigmee.com/';

    private $customer_id;

    function __construct() {
        // Construct the parent class
        parent::__construct();

        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');
        
        // initialize core api dependancy 
        parent::valid_customer($this->customer_id);
        $this->load->model('cart_model');
        $this->load->library('telecom');
    }
    

    public function recharge_post() {
        echo '<pre>'; 
        //$response = $this->telecom->sendPay2all($_POST);
        $response = $this->telecom->checkStatus_sendPay2all($_POST['payid']);
        print_r($response); 
        exit;
        $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => $cartData), REST_Controller::HTTP_OK);
    }    

}
