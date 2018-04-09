<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/REST_Controller.php';

class Address extends REST_Controller {
    private $customer_id;
    private $cu_profile;
    
    public function __construct() {
        parent::__construct();
        
        // initialize core api dependancy 
        SELF::init();
        $this->load->model('address_model');
    }
    
    private function init() {
        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');
        
        if(empty($this->customer_id) || !is_numeric($this->customer_id)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Required valid customer id.'));   
        }
        
        // load common model
        $this->load->model('profile_model', 'profile');
        
        $customerData = $this->profile->get_row_byid('customer_master', 
                array('id' => $this->customer_id), array('id'));
        
        if(empty($customerData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid customer id.'));   
        }
        $this->cu_profile = $customerData;
    }
    
    public function list_post() {
        $fieldArray = array('id', 'customer_id','title','city','area_description','pincode','person_name','mobile','email','latitude','longitude','delivery_time');
        
        $addressData = $this->address_model->get_data_by('customer_address_master', array('customer_id' => $this->customer_id, 'status' => '1'), $fieldArray);
        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $addressData));
    }
    
    public function add_put() {
        $requestData = $this->put();
        
        $postData = array(
                'customer_id' => $this->customer_id,
                'title' => (isset($requestData['title'])) ? $requestData['title'] : '',
                'city' => (isset($requestData['city'])) ? $requestData['city'] : '',
                'area_description' => (isset($requestData['area_description'])) ? $requestData['area_description'] : '',
                'pincode' => (isset($requestData['pincode'])) ? $requestData['pincode'] : '',
                'person_name' => (isset($requestData['person_name'])) ? $requestData['person_name'] : '',
                'mobile' => (isset($requestData['mobile'])) ? $requestData['mobile'] : ''
            );
        
        foreach($postData as $key=>$value) {
            if(empty($value) || $value == '') {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => $key.' key required.'));
            }
         }
        
        $postData['email'] = (isset($requestData['email'])) ? $requestData['email'] : '';
        $postData['type'] = (isset($requestData['type'])) ? $requestData['type'] : '0';
        $postData['latitude'] = (isset($requestData['latitude'])) ? $requestData['latitude'] : '';
        $postData['longitude'] = (isset($requestData['longitude'])) ? $requestData['longitude'] : '';
        $postData['delivery_time'] = (isset($requestData['delivery_time'])) ? $requestData['delivery_time'] : '';
        
        
        if($this->address_model->insert_data($postData, 'customer_address_master')) {
           $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Address has been saved successfully.')); 
        }
    }
    
    public function update_put() {
        $requestData = $this->put();
        $addressId = (isset($requestData['address_id'])) ? $requestData['address_id'] : '';
        
        if(empty($addressId) || $addressId == '') {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Provide address id.'));
        }
        
        $postData = array(
                'title' => (isset($requestData['title'])) ? $requestData['title'] : '',
                'city' => (isset($requestData['city'])) ? $requestData['city'] : '',
                'area_description' => (isset($requestData['area_description'])) ? $requestData['area_description'] : '',
                'pincode' => (isset($requestData['pincode'])) ? $requestData['pincode'] : '',
                'person_name' => (isset($requestData['person_name'])) ? $requestData['person_name'] : '',
                'mobile' => (isset($requestData['mobile'])) ? $requestData['mobile'] : ''
            );
        
        foreach($postData as $key=>$value) {
            if(empty($value) || $value == '') {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => $key.' key required.'));
            }
         }
        
        $postData['email'] = (isset($requestData['email'])) ? $requestData['email'] : '';
        $postData['type'] = (isset($requestData['type'])) ? $requestData['type'] : '0';
        $postData['latitude'] = (isset($requestData['latitude'])) ? $requestData['latitude'] : '';
        $postData['longitude'] = (isset($requestData['longitude'])) ? $requestData['longitude'] : '';
        $postData['delivery_time'] = (isset($requestData['delivery_time'])) ? $requestData['delivery_time'] : '';
        
        if(empty($postData)) {
           $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Provide at least one parameter.')); 
        }
     
        if($this->address_model->update_data($postData, 'customer_address_master', array('id' => $addressId))) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Address has been updated successfully.'));   
         }
     
    }
    
    public function remove_delete() {
        $addressId = $this->delete('address_id');
        
        if(empty($addressId) || $addressId == '') {
            $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Provide address id.'));
        }
        
        if($this->address_model->update_data(array('status' => '0'), 'customer_address_master', array('id' => $addressId))) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Address has been removed successfully.'));   
         }
    }
    
    
}