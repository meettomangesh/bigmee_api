<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends BASE_Api {

    function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model('device_model');
    }

    public function init_put() {
        $params = array(
            'device_id' => $this->put('device_id'),
            'app_id' => $this->put('app_id'),
            'name' => $this->put('name'),
            'landitude' => $this->put('landitude'),
            'latitude' => $this->put('latitude'),
            'country' => $this->put('country'),
            'state' => $this->put('state'),
            'city' => $this->put('city'),
            'address' => $this->put('address'),
            'mobile' => $this->put('mobile'),
            'email' => $this->put('email')
        );
        
        if (empty($params['device_id'])) {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Device id required.'), REST_Controller::HTTP_BAD_REQUEST);
        }
        
        $where = array("device_id" => $params['device_id']);
        $deviceExist = $this->device_model->get_row_byid('device_master', $where, array('id'));
        if (count($deviceExist) == 0) {
            $result = $this->device_model->insert_data($params, 'device_master');
            if($result){
                $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => 'Device details has been saved.'), REST_Controller::HTTP_OK);
            } else{
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Unable to save device details.'), REST_Controller::HTTP_BAD_REQUEST);
            }
        }else {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Device details already exist.'), REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}
