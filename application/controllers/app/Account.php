<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/REST_Controller.php';

class Account extends REST_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('cuaccount_model', 'account');
    }
    
    public function login_put() {
        $socialLogin = (!empty($this->put('social_login'))) ? $this->put('social_login') : '0';
        $postData = array('email' => $this->put('email'),
            'password' => $this->put('password'),
            'social_data' => json_decode($this->put('social_data'), TRUE)
        );
        
        // email required
        if(empty($postData['email'])) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Email-id required.'));
        }
         // password required
        if($socialLogin == '0' && empty($postData['password'])) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Password required.'));
        }
        
        if($socialLogin == '1') {
            $socialData = array(
                'email' =>  $postData['email'],
                'mobile' =>  (isset($postData['social_data']['mobile'])) ? $postData['social_data']['mobile'] : '',
                'social_unique_id' => (isset($postData['social_data']['social_id'])) ? $postData['social_data']['social_id'] : '',
                'friends_count' => (isset($postData['social_data']['friends_count'])) ? $postData['social_data']['friends_count'] : 0,
                'profile_pic' => (isset($postData['social_data']['profile_pic'])) ? $postData['social_data']['profile_pic'] : '',
                'user_name' => (isset($postData['social_data']['user_name'])) ? $postData['social_data']['user_name'] : '',
                'full_name' => (isset($postData['social_data']['name'])) ? $postData['social_data']['name'] : '',
                'user_gender' => (isset($postData['social_data']['gender'])) ? $postData['social_data']['gender'] : '',
                'social_type' => (isset($postData['social_data']['social_type'])) ? $postData['social_data']['social_type'] : '',
                'profile_url' => (isset($postData['social_data']['profile_url'])) ? $postData['social_data']['profile_url'] : '',
                'profile_status' => (isset($postData['social_data']['profile_status'])) ? $postData['social_data']['profile_status'] : '',
                'address' => (isset($postData['social_data']['address'])) ? $postData['social_data']['address'] : '',
                'state' => (isset($postData['social_data']['state'])) ? $postData['social_data']['state'] : '',
                'district' => (isset($postData['social_data']['district'])) ? $postData['social_data']['district'] : '',
                'taluka' => (isset($postData['social_data']['taluka'])) ? $postData['social_data']['taluka'] : '',
                'city' => (isset($postData['social_data']['city'])) ? $postData['social_data']['city'] : '',
                'pincode' => (isset($postData['social_data']['pincode'])) ? $postData['social_data']['pincode'] : ''
            );
            
            // social id required
            if(empty($socialData['social_unique_id'])) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Social id required.'));
            }
            
            // Valid social types
            $this->load->config('socialtype_config', TRUE);
            $config = $this->config->config;
            $socialType = $config['socialtype_config'];
            
            if(!array_key_exists($socialData['social_type'], $socialType)) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid social type.'));
            }
        }
        // check email already registered
        $emailExist = $this->account->get_row_byid('customer_master', 
                array('email' => $postData['email']), array('id customer_id', 'email', 'name', 'profile_pic', 'gender', 'mobile', 'acct_balance', 'acct_wallet', 'acct_lock'));
        
        if($socialLogin == '0') {
            SELF::emailLogin($postData['email'], $postData['password']);
        }
        unset($postData['social_data']);
        
        $postData = $socialData;
        
        $defaultPassword = 1234;
        $postData['password'] = md5($defaultPassword); 
        unset($postData['social_unique_id']);
        unset($postData['social_type']);
        unset($postData['profile_status']);
        unset($postData['friends_count']);
        unset($postData['user_name']);
        unset($postData['profile_url']);
        
        $postData['name'] = $postData['full_name'];
        $postData['gender'] = $postData['user_gender'];
        unset($postData['full_name']);
        unset($postData['user_gender']);
        
        // email verification default true for social login
        $postData['email_verification'] = 1;
        
        // add data in customer table
        if(count($emailExist) == 0) {
            $customer_id = $this->account->insert_data($postData, 'customer_master');
            
            // send registration successful message and email
            $content = "<p>Thank you for registartion,
                    Your account has been successfully registered for this email on bigmee using {$socialType[$socialData['social_type']]} login, your account password is ".$defaultPassword;
                 
            SELF::send_email(array(
                'to' => $postData['email'], 'content' => $content));
            
           $this->load->library('sms_notification');
           $this->sms_notification->textmessage = "Thank you for registration, Your account has been successfully registered for {$postData['email']} email on bigmee using {$socialType[$socialData['social_type']]} login, your account password is {$defaultPassword}";
           $this->sms_notification->sendMessage($postData['mobile']);
           unset($this->sms_notification);
        }else{
            $customer_id = $emailExist->customer_id;
        }
        
        if($socialLogin == '1') {
            // add social user data
            $socialData['customer_id'] = $customer_id;
            $this->load->model('socialuser_model', 'socialuser');
            $social_userid = $this->socialuser->create_social_user($socialData);
            unset($this->socialuser);
            
            SELF::emailLogin($postData['email']);
        }  
            
        SELF::emailLogin($postData['email'], $postData['password']);      
    }
    
    private function emailLogin($email, $password=NULL) {
        $loginCredential['email'] = $email;
        
        if($password != NULL) {
        	$loginCredential['password'] = md5($password);
        }
        $loginData = $this->account->get_row_byid('customer_master', 
                $loginCredential, array('id customer_id', 'email', 'name', 'profile_pic', 'gender', 'mobile', 'acct_balance', 'acct_wallet', 'acct_lock'));
        
        if($loginData) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $loginData));
        }else{
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid login credentials.'));        
        }    
    }
    
    public function registration_put() {
        $postData = array('email' => $this->put('email'),
            'password' => $this->put('password'),
            'mobile' => $this->put('mobile'),
            'fname' => $this->put('fname'),
            'lname' => $this->put('lname'),
        );
        $this->runValidation($postData);
        
        $otp_code = $this->put('otp_code');
        
        $emailExist = $this->account->get_row_byid('customer_master', 
                array('email' => $postData['email']), array('email'));
        
        if($emailExist) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Email-id already associated with another account.'));
        }
                    
        $this->load->library('sms_notification');
        
        if(!empty($otp_code)) {     
            if(empty($postData['password'])) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Password required.'));
            }
            // check otp, complete registratopn and login user
            $session_otp = $this->sms_notification->get_otp_code( 'registration_otp');
            if($otp_code == $session_otp || 1) { 
                $password = $postData['password'];
                
                $postData['password'] = md5($postData['password']);
                $postData['name'] = $postData['fname'].' '.$postData['lname'];
                
                unset($postData['fname']);
                unset($postData['lname']);
                
                if($this->account->insert_data($postData, 'customer_master')) {
                    // send registration successful message and email
                    $content = '<p>Thank you for registartion,
                            Your account has been successfully registered for this email on bigmee, your account password is '.$password;
                         
                    SELF::send_email(array(
                        'to' => $postData['email'], 'content' => $content));
                        
                   $this->sms_notification->textmessage = "Thank you for registration, Your account has been successfully registered for {$postData['email']} email on bigmee, your account password is {$password}";
                   $this->sms_notification->sendMessage($postData['mobile']);
                   unset($this->sms_notification);
                   
                    SELF::emailLogin($postData['email'], $password);
                }
            }else{
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid OTP.'));        
            }
        }
        
        // send otp on mobile number
        $message = "Thank you for sign up here, for complete signup";
        $otp_code = $this->sms_notification->send_otp_code('registration_otp', $postData['mobile'], $message);
        unset($this->sms_notification);
        if($otp_code) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => array('message' => 'OTP code has been send on mobile number.', 'otp_code' => $otp_code, 'return_data' => $postData)));
        }else {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Please wait, you can retry for OTP after 2 minutes still you can use previous one.', 'otp_code' => $this->session->userdata('registration_otp'), 'return_data' => $postData)));
        }
    }
    
    public function resendotp_post() {
        // resend otp on mobile 
        $mobile = $this->input->post('mobile');
        
        if(empty($mobile)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Mobile number required.'));
        }
        
        $message = "Thank you for sign up here, for complete signup";
        
        $this->load->library('sms_notification');
        $otp_code = $this->sms_notification->send_otp_code('registration_otp', $mobile, $message);
        unset($this->sms_notification);
        if($otp_code) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => array('message' => 'OTP code has been send on mobile number.', 'otp_code' => $otp_code)));
        }else {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Please wait, you can retry for OTP after 2 minutes still you can use  previous one.', 'otp_code' => $this->session->userdata('registration_otp'))));
        }
    }
    
    private function send_email(array $emailData) {
            $this->load->library('email_notification');
            $this->email_notification->subject = "Bigmee E-Commerce- Thank you for registration";
            $this->email_notification->to = $emailData['to'];
            
            $email = '<table border="0" cellspacing="4" cellpadding="4">'.$emailData['content'].'</table>';
            
            $this->email_notification->message = $email;
            $this->email_notification->sendMail();
            unset($this->email_notification);
    }
        
}
