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
        $serviceId = 3;
        //$api = $this->supplier_model->get_row_byid('telecom_api', array('status' => 1), array('api_id'));
        //$api = $this->supplier_model->get_row_byid('sms_api', array('api_status' => 1,'type' => 'telecom'), array('api_id'));
        $api = $this->telecomserviceapi_model->get_data_by('sms_api', array('type' => 'telecom', 'api_status' => 1), array('api_id'));
        $apiId = array_column($api, 'api_id');

        // foreach ($serviceData as $sKey => $serviceRow) {
        $condition = 'service_id=' . $serviceId . ' AND status="1" AND (api_id = "3" OR api_id = "5")';
        $providerData = $this->telecomserviceapi_model->get_tele_data_by('telecom_providers', $condition, array('id', 'api_id', 'provider_name', 'provider_code', 'status', 'provider_logo'), array('provider_name', 'asc'));
        $serviceData['providers'] = $providerData;
        //  }
        echo '<pre>';
        print_r($providerData);
        exit;
        $response['status'] = 'OK';
        $response['data'] = $serviceData;
        die(json_encode($response));
    }
    
    /**
     * To get all available providers by specific service id
     */
    
    public function getAllProvidersByServiceId_post() {
        $serviceId = $this->post('service_id');

        if (empty($serviceId)) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Provide Service Id.'), REST_Controller::HTTP_BAD_REQUEST);
        }

        $serviceData = $this->telecomserviceapi_model->get_data_by('telecom_services', array('status' => '1', 'id' => $serviceId), array('id', 'service_name', 'status'), array('sequence', 'asc'));
        if (empty($serviceData)) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Please provider valid service id.'), REST_Controller::HTTP_BAD_REQUEST);
        }

        $condition = 'service_id=' . $serviceId . ' AND status="1" AND (api_id = "3" OR api_id = "5")';
        $providerData = $this->telecomserviceapi_model->get_tele_data_by('telecom_providers', $condition, array('id', 'api_id', 'provider_name', 'provider_code', 'status', 'provider_logo'), array('provider_name', 'asc'));
       
        foreach ($providerData as $sKey => $providerRow) {
            $providerData[$sKey]['plan'] = $this->telecomserviceapi_model->getPlanDataByProviderId($providerRow['id']);
            
        }
        if (empty($providerData)) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Providers not available to this service.'), REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => $providerData), REST_Controller::HTTP_OK);
        }
    }

}
