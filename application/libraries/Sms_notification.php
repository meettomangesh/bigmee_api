<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sms_notification {

    public function __construct() {

        $this->CI = & get_instance();
    }

    private $sender_id = 'bigmee';
    public $textmessage;

    // return the active sms api

    private function active_api() {
        $this->CI->load->model('cuaccount_model', 'account');

        return $this->CI->account->get_active_message_api();
    }

    public function sendMessage($mobile) {
        // encode message
        $textmessage = urlencode($this->textmessage . "\n Thank You,  Regards : bigmee");

        $active_api = $this->active_api();

        switch ($active_api->api_id) {
            case 1:
                return $this->send_payall_message($textmessage, $mobile);
                break;

            case 2:
                return $this->send_sarv_message($textmessage, $mobile);
                break;

            default:
                return $this->send_payall_message($textmessage, $mobile);
                break;
        }
    }

    private function send_sarv_message($textmessage, $mobile) {

        $smsGatewayUrl = 'http://manage.sarvsms.com/api/send_transactional_sms.php';
        $msg_token = 'LYjMFR';
        $user_id = "u5568";


        $api_params = '?username=' . $user_id . '&msg_token=' . $msg_token . '&sender_id=' . $this->sender_id . '&message=' . $textmessage . '&mobile=' . $mobile;

        // build url with parameters
        $url = $smsGatewayUrl . $api_params;

        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));

        $response['status'] = 0;

        if ($resp = curl_exec($curl)) {
            $response['status'] = 1;
        }
        curl_close($curl);

        $response['api'] = 'SRAV';

        return $response;
    }

    public function send_payall_message($textmessage, $mobile) {
        $smsGatewayUrl = 'http://sms.payall.co.in/submitsms.jsp';
        $key = 'c2330ed55aXX';
        $user = "PAYIND";
        $senderid = "bigmee";
        $accusage = 1;

        // build parameters
        $api_params = "?user=" . $user . "&key=" . $key . "&mobile=" . $mobile . "&message=" . $textmessage . "&senderid=" . $senderid . "&accusage=" . $accusage;

        $url = $smsGatewayUrl . $api_params;

        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));


        $response['status'] = 0;

        if ($resp = curl_exec($curl)) {
            $response['status'] = 1;
        }
        curl_close($curl);

        $response['api'] = 'SRAV';

        return $response;
    }

// for sending OTP message 
    public function send_otp_code($session_id, $mobile, $message) {

        if (!$this->CI->session->userdata($session_id)) {
            $mobile_otp = generateOtp();

            $this->textmessage = "Dear user, " . $message . " your one time OTP code is " . $mobile_otp . " ";

            $this->sendMessage($mobile);

            $this->CI->session->set_userdata($session_id, $mobile_otp);
            $this->CI->session->mark_as_temp($session_id, 120);
            return $mobile_otp;
        } else {
            return FALSE;
        }
    }

// get OTP code 
    public function get_otp_code($session_id) {

        if ($this->CI->session->userdata($session_id) != NULL) {
            return $this->CI->session->userdata($session_id);
        } else {
            return FALSE;
        }
    }

}
