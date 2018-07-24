<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends BASE_Api {

    private $customer_id;

    public function __construct() {
        parent::__construct();

        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');

        // initialize core api dependancy 
        parent::valid_customer($this->customer_id);
    }

    public function index_post() {
        $fields = $this->post('field');
        $fieldArray = array('id', 'name', 'email', 'profile_pic', 'acct_balance');
        $validFields = array('id', 'name', 'email', 'mobile', 'address', 'pincode', 'city', 'taluka', 'district', 'state', 'gender', 'profile_pic', 'acct_balance', 'acct_wallet', 'acct_lock', 'email_verification', 'mobile_verification');

        $fieldArray = (!empty($fields)) ? explode(',', $fields) : $fieldArray;

        if (empty($fieldArray)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid fields parameter value.'));
        }

        foreach ($fieldArray as $field) {
            if (!in_array($field, $validFields)) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => "Invalid $field in field."));
            }
        }

        $customerData = $this->profile->get_row_byid('customer_master', array('id' => $this->customer_id), $fieldArray);
        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $customerData));
    }

    public function updateProfilePicture_post() {
        $requestData = $this->post();
        $profile_pic = '';

        if (!empty($_FILES['profile_pic'])) {
            $folderName = $this->customer_id;
            $pathToUpload = './uploads/profile_pic/' . $folderName;
            if (!file_exists($pathToUpload)) {
                $create = mkdir($pathToUpload, 0777);
                if (!$create)
                    return;
            }
            $config['allowed_types'] = 'png|jpeg|jpg|gif';
            $config['max_size'] = 2048;
            $config['upload_path'] = $pathToUpload;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $file_name = underscore($_FILES['profile_pic']['name']);
            $_FILES['profile_pic']['name'] = $file_name;

            $uploadfile = $pathToUpload . '/' . $file_name;

            if ($this->upload->do_upload('profile_pic')) {
                $uploadData = $this->upload->data();
                $profile_pic = base_url() . 'uploads/profile_pic/' . $folderName . '/' . $uploadData['file_name'];
            } else {
                $profile_pic = '';
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Problem to upload the profile picture.'));
            }
        } else {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Please upload the profile picture.'));
        }
        $postData = array(
            'profile_pic' => $profile_pic
        );

        if (empty($postData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Provide at least one parameter.'));
        }
        if ($this->profile->update_data($postData, 'customer_master', array('id' => $this->customer_id))) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Profile picture has been updated successfully.', 'profile_pic' => $profile_pic));
        }
    }

    public function update_post() {
        $requestData = $this->post();

        $postData = array(
            'name' => (isset($requestData['name'])) ? $requestData['name'] : '',
            'email' => (isset($requestData['email'])) ? $requestData['email'] : '',
            'mobile' => (isset($requestData['mobile'])) ? $requestData['mobile'] : '',
            'address' => (isset($requestData['address'])) ? $requestData['address'] : '',
            'pincode' => (isset($requestData['pincode'])) ? $requestData['pincode'] : '',
            'city' => (isset($requestData['city'])) ? $requestData['city'] : '',
            'taluka' => (isset($requestData['taluka'])) ? $requestData['taluka'] : '',
            'district' => (isset($requestData['district'])) ? $requestData['district'] : '',
            'state' => (isset($requestData['state'])) ? $requestData['state'] : '',
            'gender' => (isset($requestData['gender'])) ? $requestData['gender'] : '',
            'bdate' => (isset($requestData['bdate'])) ? $requestData['bdate'] : ''
        );

        if (empty($postData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Provide at least one parameter.'));
        }
        if (array_key_exists('email', $postData)) {
            $emailExist = $this->profile->get_row_byid('customer_master', array('email' => $postData['email']), array('email', 'id'));
            if (!empty($emailExist) && ($emailExist->id != $this->customer_id)) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Email-id already associated with another account.'));
            }
            $postData['email_verification'] = 0;
        }

        if ($this->profile->update_data($postData, 'customer_master', array('id' => $this->customer_id))) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Profile has been updated successfully.'));
        }
    }

    public function addbalance_put() {
        $postData = array(
            'payment_method' => json_decode($this->put('payment_method'), TRUE),
            'payment_reference' => $this->put('payment_reference'),
            'amount' => (float) $this->put('amount'),
            'customer_id' => $this->customer_id
        );

        foreach ($postData as $key => $value) {
            if (empty($value) || $value == '') {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Non empty ' . $key . ' key required.'));
            }
        }
        $postData['payment_method'] = json_encode($postData['payment_method']);
        if ($response = $this->profile->add_active_balance($postData)) {
            $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => array('message' => 'Your account balance has been updated.', 'data' => $response)));
        }
    }

    public function transactions_post() {
        $postData = array(
            'limit' => ($this->post('limit')) ? $this->post('limit') : 10,
            'offset' => ($this->post('offset')) ? $this->post('offset') : 0
        );

        $validCondition = array('txn_type', 'balance_type', 'from_date', 'to_date');
        $validSort = array('txn_type' => 'txn_type', 'balance_type' => 'balance_type', 'txn_addon' => 'date');

        $sort_by = (!empty($this->post('sort_by'))) ? explode(',', $this->post('sort_by')) : array();

        if (!empty($sort_by)) {
            $sort_key = array_search($sort_by[0], $validSort);

            if ($sort_key === FALSE) {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => array('message' => 'Invalid sort_by field.')));
            }
            if (!in_array($sort_by[1], array('asc', 'desc'))) {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => array('message' => 'Invalid sort_by field value (allowed asc,desc).')));
            }

            $postData['order_by'] = array($sort_key, $sort_by[1]);
        }

        $condition = (!empty($this->post('search'))) ? json_decode($this->post('search'), true) : array();

        if (!empty($condition)) {
            foreach ($condition as $key => $value) {
                if (array_search($key, $validCondition) === FALSE) {
                    $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => array('message' => 'Invalid ' . $key . ' key in search key.')));
                }
                if ($value == '') {
                    $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => array('message' => 'Required non empty ' . $key . ' field in search key.')));
                }
            }
            $postData['where'] = $condition;
        }
        if (!isset($postData['where']['balance_type'])) {
            $postData['where']['balance_type'] = '0';
        }
        $postData['where']['customer_id'] = $this->customer_id;
        if (!isset($postData['where']['from_date'])) {
            $postData['where']['from_date'] = date('Y-m-d', strtotime("-1 month"));
        }
        if (!isset($postData['where']['to_date'])) {
            $postData['where']['to_date'] = date('Y-m-d');
        }

        $transData = $this->profile->transaction_list($postData);
        $this->response(array('status' => REST_Controller::HTTP_OK, 'data' => array(
                'transactions' => $transData,
                'customer_id' => $this->customer_id,
                'acct_balance' => $this->cu_profile->acct_balance))
        );
    }
    
    public function changepassword_put() {
        $postData = array(
            'old_password' => $this->put('old_password'),
            'new_password' => $this->put('new_password')
        );
        foreach ($postData as $key => $value) {
            if (empty($value) || $value == '') {
                $this->response(array('status' => REST_Controller::HTTP_BAD_REQUEST, 'data' => 'Non empty ' . $key . ' key required.'));
            }
        }
        
        $profileData = $this->profile->get_row_byid('customer_master', array('id' => $this->customer_id, 'password' => md5($postData['old_password'])), array('email','mobile','IF(name="", "user", name) AS name'));
        if (empty($profileData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'You have entered wrong current password.'));
        }
        
        if ($this->profile->update_data(array('password' => md5($postData['new_password'])), 'customer_master', array('id' => $this->customer_id))) {
            if(!empty($profileData->email)) {
                $this->load->library('email_notification');
                $this->email_notification->subject = "Bigmee E-Commerce- Account password changed";
                $this->email_notification->to = $profileData->email;
                $email = "Dear ".$profileData->name.',<br>';
                $email .= "\t\t Your account password has been changed, new password is <i>{$postData['new_password']}</i>";

                $this->email_notification->message = $email;
                $this->email_notification->sendMail();
                unset($this->email_notification);
            }
            if(!empty($profileData->mobile)) {
                $this->load->library('sms_notification');
                $this->sms_notification->textmessage = "Dear {$profileData->name}, Your account password has been changed, new password is {$postData['new_password']}";
                $this->sms_notification->sendMessage($profileData->mobile);
                unset($this->sms_notification);
            }
            
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Account password has been successfully changed.'));
        }
        
    }
}
