<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/REST_Controller.php';

class Profile extends REST_Controller {
    private $customer_id;
    private $cu_profile;
    
    public function __construct() {
        parent::__construct();
        
        // initialize core api dependancy 
        SELF::init();
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
        echo '<pre>'; echo '123'; print_r($customerData);exit;
        
        if(empty($customerData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid customer id.'));   
        }
        $this->cu_profile = $customerData;
    }
    
    public function update_put() {
        $requestData = $this->put();
        
        $postData = array(
                'name' => (isset($requestData['name'])) ? $requestData['name'] : '',
                'email' => (isset($requestData['email'])) ? $requestData['email'] :'',
                'mobile' =>  (isset($requestData['mobile'])) ? $requestData['mobile'] : '',
                'address' => (isset($requestData['address'])) ? $requestData['address'] : '',
                'pincode' => (isset($requestData['pincode'])) ? $requestData['pincode'] : '',
                'city' => (isset($requestData['city'])) ? $requestData['city'] : '',
                'taluka' => (isset($requestData['taluka'])) ? $requestData['taluka'] : '',
                'district' => (isset($requestData['district'])) ? $requestData['district'] : '',
                'state' => (isset($requestData['state'])) ? $requestData['state'] : '',
                'gender' => (isset($requestData['gender'])) ? $requestData['gender'] : '',
                'profile_pic' => (isset($requestData['profile_pic'])) ? $requestData['profile_pic'] : '',
                'bdate' => (isset($requestData['bdate'])) ? $requestData['bdate'] : ''
            );
        
     // unset emapty fields   
     foreach($postData as $key=>$field) {
         if($field == '') {
             unset($postData[$key]);
         }
     } 
     if(empty($postData)) {
        $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Provide at least one parameter.')); 
     }
     if(array_key_exists('email', $postData)) {
        $emailExist = $this->profile->get_row_byid('customer_master', 
                array('email' => $postData['email']), array('email'));
        if($emailExist) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Email-id already associated with another account.'));   
        }
        $postData['email_verification'] = 0;
     }
     
     if($this->profile->update_data($postData, 'customer_master', array('id' => $this->customer_id))) {
         if(array_key_exists('profile_pic', $postData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Profile picture has been updated successfully.')); 
         }
         $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Profile has been updated successfully.'));   
      }
     
    }
    
}