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
        $this->load->model('telecomserviceapi_model');
        $this->load->library('telecom');
        $this->load->model('cart_model');
    }
    

    public function recharge_post() {
        echo '<pre>'; 
        //$response = $this->telecom->sendPay2all($_POST);
        $response = $this->telecom->checkStatus_sendPay2all($_POST['payid']);
        print_r($response); 
        exit;
        $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => $cartData), REST_Controller::HTTP_OK);
    }    
	
	public function teleservices_post() {
        $serviceData = $this->telecomserviceapi_model->get_data_by('telecom_services', array('status' => '1'), array('id', 'service_name', 'status', 'service_logo'), array('sequence', 'asc'));
        //$api = $this->supplier_model->get_row_byid('telecom_api', array('status' => 1), array('api_id'));
        
        //$api = $this->supplier_model->get_row_byid('sms_api', array('api_status' => 1,'type' => 'telecom'), array('api_id'));
        $api = $this->telecomserviceapi_model->get_data_by('sms_api', array('type' => 'telecom', 'api_status' => 1), array('api_id'));
        $apiId = array_column($api, 'api_id');
        
        foreach ($serviceData as $sKey => $serviceRow) {
            //$providerData = $this->supplier_model->get_data_by('telecom_providers', array('service_id' => $serviceRow['id'], 'status' => '1','api_id' => $api->api_id), array('id', 'provider_name', 'provider_code', 'status', 'provider_logo'), array('provider_name', 'asc'));
            $condition = 'service_id='. $serviceRow['id'].' AND status="1" AND (api_id = "3" OR api_id = "5")';
            $providerData = $this->telecomserviceapi_model->get_tele_data_by('telecom_providers', $condition, array('id', 'api_id', 'provider_name', 'provider_code', 'status', 'provider_logo'), array('provider_name', 'asc'));
            $serviceData[$sKey]['providers'] = $providerData;
        }
        $response['status'] = 'OK';
        $response['data'] = $serviceData;
        die(json_encode($response));
    }
	

}
