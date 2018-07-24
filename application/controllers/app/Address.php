<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends BASE_Api {
    private $customer_id;
    
    public function __construct() {
        parent::__construct();
        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');
        
        // initialize core api dependancy 
        parent::valid_customer($this->customer_id);
        $this->load->model('address_model');
    }
    
    public function list_post() {
        $fieldArray = array('id', 'customer_id','title','IF(type="0", "home", "office")as type', 'city','area_description','pincode','person_name','mobile','email','latitude','longitude','delivery_time', 'is_default');
        
        $addressData = $this->address_model->get_data_by('customer_address_master', array('customer_id' => $this->customer_id, 'status' => '1'), $fieldArray);
        foreach($addressData as $key=>$row) {
            $explodeAddr = explode('^', $addressData[$key]['area_description']);
            $addressData[$key]['area_description'] = $explodeAddr[0]; 
            $addressData[$key]['area_street_flat'] = (isset($explodeAddr[1])) ? $explodeAddr[1] : ''; 
        }
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
        $postData['area_description'] = (isset($requestData['area_street_flat'])) ? $postData['area_description'].'^'.$requestData['area_street_flat'] : $postData['area_description'];            
        
        if(isset($requestData['is_default']) && $requestData['is_default'] == '1') {
            $postData['is_default'] = '1';
        }
        
        if($last_id = $this->address_model->insert_data($postData, 'customer_address_master')) {
            
            if($postData['is_default'] == '1') {
                $this->address_model->update_data(array('is_default' => '0'), 'customer_address_master', array('id !=' => $last_id, 'customer_id' => $this->customer_id));
            }
            
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
        $postData['area_description'] = (isset($requestData['area_street_flat'])) ? $postData['area_description'].'^'.$requestData['area_street_flat'] : $postData['area_description'];            
        
        if(isset($requestData['is_default']) && $requestData['is_default'] != '') {
            $postData['is_default'] = $requestData['is_default'];
            if($postData['is_default'] == '1') {
                $this->address_model->update_data(array('is_default' => '0'), 'customer_address_master', array('id !=' => $addressId, 'customer_id' => $this->customer_id));
            }
        }
        
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