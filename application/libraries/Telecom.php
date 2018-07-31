<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Telecom {

    private $api = array(
        'nWallet' => array(
            'apiUrl' => 'https://www.n-wallet.co.in/apiservice.asmx/Recharge',
            'apiStatusUrl' => 'https://www.n-wallet.co.in/apiservice.asmx/GetRechargeStatus',
            'api_token' => '7573daad6c684d6c932e602ae13633ad' // 132.148.20.208
        ),
        
         'instantPay' => array(
            'apiUrl' => 'https://www.n-wallet.co.in/apiservice.asmx/Recharge',
            'apiStatusUrl' => 'https://www.n-wallet.co.in/apiservice.asmx/GetRechargeStatus',
            'api_token' => '5c68618527fd55ad9be4b92e8bc5447e' // 132.148.20.208            
        ),
        
        'Pay2All' => array(
            'apiUrl' => 'https://www.pay2all.in/web-api/',                 
            'api_token' => 'ScL2mxWwrFmH5t3r6L7C6ixOFs1YIoNCzXgW0bx4Ap4Fy54Fe0JHP1kRpzPL' 
            )
    );
    
   // public $apiStatusUrl = 'https://www.n-wallet.co.in/apiservice.asmx/GetRechargeStatus';

    public function __construct() {

        $this->CI = & get_instance();
    }

    // return the active sms api

    private function active_telecom_api() {
        $this->CI->load->model('cm_model');
        return $this->CI->cm_model->get_active_telecom_api();
    }
    
    
    public function verify_bill(array $postData) {
     
        $api_id = 1;
        switch($api_id) {
            case 1:
                    return $this->verify_billPay2all($postData);
                    break;

            case 2:
                    return $this->verify_billInstantPay($postData);
                    break;
                    
            default:
                   return $this->verify_billPay2all($postData);
                    break; 
        }
         
    }
    
    	//for verify_billPay2all
    public function verify_billPay2all(array $postData) {
      
	 $apiUrl = $this->api['Pay2All']['apiUrl'];
                $api_token = $this->api['Pay2All']['api_token'];
                
		$customer_number = $postData['number'];
		$provider_id = $postData['opcode'];
		
		$optional1 = $postData['optional1'];
		$optional2 = $postData['optional2'];
		
		$api_params = 'check-bill?api_token='.$api_token.'&number='.$customer_number.'&provider_id='.$provider_id.'&optional1='.$optional1.'&optional2='.$optional2;	
		
        // build url with parameters
        $url = $apiUrl.$api_params;

        // Get cURL resource
        $curl = curl_init(); 
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));

        $response['status'] = 0;
  
        if($resp = curl_exec($curl)) {
          $response['status'] = 1;
        }
        curl_close($curl);

        $response['api'] = 'Pay2all';
        $response['resp'] = json_decode($resp);

		return $response;
    }

    public function paybill(array $postData, $api_id) {
       
        switch ($api_id) {
            case 3:
                return $this->sendNWallet($postData);
                break;

            case 4:
                return $this->sendInstantPay($postData);
                break;
            
            case 5:
                return $this->sendPay2all($postData);
                break;
                
            default:
                return $this->sendNWallet($postData);
                break;
        }
    }
    
    
    //check transaction status
    public function checkStatus($reqid, $api_id) {
        //$this->check_internet_connection();
        //$active_api = $this->active_telecom_api();

        switch($api_id) {
            case 3:
                    return $this->checkStatus_sendNWallet($reqid);
                    break;

            case 4:
                    return $this->checkStatus_sendInstantPay($reqid);
                    break;
                
            case 5:
                    return $this->checkStatus_sendPay2all($reqid);
                    break;    
                    
            default:
                   return $this->checkStatus_sendNWallet($reqid);
                    break; 
        }
         
    }
    
     //transaction status
     
      public function transStatus_nWallet($txn_status) {       
                      
       switch($txn_status) {
            case 1000: // SUCCESS
                $status['status'] = '1';
                $status['reason'] = 'SUCCESS';
                return $status;
                break;                  
            case 1014: // REFUND
                $status['status'] = '4';
                $status['reason'] = 'REFUND';
                return $status;
                break;
            case 1010: // RECHARGE PENDING
                $status['status'] = '3';
                $status['reason'] = 'RECHARGE PENDING';
                return $status;
                break;            
            case 1018: // INTERNAL ERROR
                $status['status'] = '5';
                $status['reason'] = 'RECHARGE ACCEPTED';
                return $status;
                break;    
            case 1003: // ACCESS DENIED
                $status['status'] = '6';
                $status['reason'] = 'ACCESS DENIED';
                return $status;
                break;
            case 1004: // API NOT ASSIGNED
                $status['status'] = '7';
                $status['reason'] = 'API NOT ASSIGNED';
                return $status;
                break;
            case 1005: // INVALID MOBILE NO.
                $status['status'] = '8';
                $status['reason'] = 'INVALID MOBILE NO.';
                return $status;
                break;
            case 1006: // INVALID AMOUNT
                $status['status'] = '9';
                $status['reason'] = 'INVALID AMOUNT';
                return $status;
                break;
            case 1007: // DUPLICATE REQID
                $status['status'] = '10';
                $status['reason'] = 'DUPLICATE REQID';
                return $status;
                break; 
            case 1008: // NETWORK ERR
                $status['status'] = '11';
                $status['reason'] = 'NETWORK ERR';
                return $status;
                break;
            case 1009: // FREQUENT RECHARGE
                $status['status'] = '12';
                $status['reason'] = 'FREQUENT RECHARGE';
                return $status;
                break;
            case 1011: // INTERNAL ERR
                $status['status'] = '13';
                $status['reason'] = 'INTERNAL ERR';
                return $status;
                break;
            case 1013: // OPERATOR DOWN
                $status['status'] = '14';
                $status['reason'] = 'OPERATOR DOWN';
                return $status;
                break;
            case 1015: // INSUFFICIENT BALANCE
                $status['status'] = '15';
                $status['reason'] = 'INSUFFICIENT BALANCE';
                return $status;
                break;
            case 1016: // INSUFFICIENT MINIMUM BALANCE
                $status['status'] = '16';
                $status['reason'] = 'INSUFFICIENT MINIMUM BALANCE';
                return $status;
                break;
            case 1017: // REFUND DECLINED
                $status['status'] = '17';
                $status['reason'] = 'REFUND DECLINED';
                return $status;
                break;
            case 1019: // CLAIM REFUND
                $status['status'] = '18';
                $status['reason'] = 'CLAIM REFUND';
                return $status;
                break;            
            default: // FAILED
                $status['status'] = '2';
                $status['reason'] = 'FAILED';
                return $status;
                break;    
        }
        
    }
  /*  public function transStatus_nWallet($txn_status) {
       // print_r($txn_status);
       switch($txn_status) {
            case 1000: // success
                $txn_status = '1';
                return $txn_status;
                break;
            case 1014: // refund
                $txn_status = '4';
                return $txn_status;
                break;
            case 1002: // Failed
                $txn_status = '2';
                return $txn_status;
                break;     
            case 1011: // INTERNAL ERROR
                $txn_status = '2';
                return $txn_status;
                break;   
            case 1007: // duplicate
                $txn_status = '5';
                return $txn_status;
                break;   
            case 1003: // access denied
                $txn_status = '5';
                return $txn_status;
                break;  
            case 1004: // api not assigned
                $txn_status = '6';
                return $txn_status;
                break;      
            case 1005: // invalid amount
                $txn_status = '7';
                return $txn_status;
                break;  
            case 1008: // network error
                $txn_status = '8';
                return $txn_status;
                break;      
            case 1009: // frequence recharge
                $txn_status = '9';
                return $txn_status;
                break;
            case 1011: // internal error
                $txn_status = '10';
                return $txn_status;
                break;  
            case 1013: // operator down
                $txn_status = '11';
                return $txn_status;
                break;      
            default: // pending
                $txn_status = '3';
                return $txn_status;
                break;      
        }
    }    */
    


    //for send n-Wallet
    public function sendNWallet(array $postData) {

        $apiUrl = $this->api['nWallet']['apiUrl'];
        $api_token = $this->api['nWallet']['api_token'];
        
        $customer_number = $postData['number'];
        $opcode = $postData['opcode'];
        $amount = $postData['amount'];
        $reqid = $postData['reqid'];
        $field1 = $postData['field1'];
        $field2 = $postData['field2'];

        $api_params = '?apiToken=' . $api_token . '&mn=' . $customer_number . '&op=' . $opcode . '&amt=' . $amount . '&reqid=' . $reqid . '&field1=' . $field1 . '&field2=' . $field2;
        // build url with parameters
        $url = $apiUrl . $api_params;

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

        // coverting XML response in array
        $xml = @simplexml_load_string($resp);
        
        //$txn_status = (string) $xml->status;
        
        
        $txn_status = (string) $xml->ec;
        //print_r($txn_status); die;
        
        $txn_status = $this->transStatus_nWallet($txn_status);
        //print_r($txn_status); die;
        
        $response['txn_reference'] = (string) $xml->reqid;
        $response['txn_status'] = $txn_status;
        $response['status'] = $txn_status;
        $response['number'] = (string) $xml->mn;
        $response['txn_amount'] = (string) $xml->amt;
        $response['api'] = 'nWallet';
        //print_r($response);  
        return $response;
    }
    
    //for checkStatus_recharge
    public function checkStatus_sendNWallet($reqid) {
     
        $apiUrl = $this->api['nWallet']['apiStatusUrl'];
        $api_token = $this->api['nWallet']['api_token'];
        $api_params = '?apiToken=' . $api_token . '&reqid=' . $reqid;

        // build url with parameters
        $url = $apiUrl . $api_params;

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
        
         // coverting XML response in array
        $xml = @simplexml_load_string($resp);

        $txn_status = (string) $xml->ec;
       
        $txn_status = $this->transStatus_nWallet($txn_status);
       
        $response['txn_reference'] = (string) $xml->reqid;
        $response['status'] = $txn_status;
        $response['remark'] = (string) $xml->remark;
        $response['mn'] = (string) $xml->mn;
        $response['statuscode'] = (string) $xml->ec;

        return $response;
    }    
    
    	//for sendPay2all
    public function sendPay2all(array $postData) {
       
        $input_mobile = $postData['number'];

        $apiUrl = $this->api['Pay2All']['apiUrl'];
        $api_token = $this->api['Pay2All']['api_token'];
        
		$customer_number = $postData['number'];
		$provider_id = $postData['opcode'];
		$amount = $postData['amount'];
		$clientuniqueid = $postData['reqid'];
		
	    if(!empty($postData["billing_unit"])){
			//for electricity bill
			$billing_unit = $postData["billing_unit"];
			$processing_cycle = $postData["processing_cycle"];
			$api_params = 'paynow?api_token='.$api_token.'&number='.$customer_number.'&provider_id='.$provider_id.'&amount='.$amount.'&client_id='.$clientuniqueid.'&optional1='.$billing_unit.'&optional2='.$processing_cycle;
		}else{
			$api_params = 'paynow?api_token='.$api_token.'&number='.$customer_number.'&provider_id='.$provider_id.'&amount='.$amount.'&client_id='.$clientuniqueid;	
		}	
		
        // build url with parameters
        $url = $apiUrl.$api_params;
        // Get cURL resource
        $curl = curl_init(); 
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));

        $response['status'] = 0;
  
        if($resp = curl_exec($curl)) {
          $response['status'] = 1;
        }
        curl_close($curl);

        $response['api'] = 'Pay2all';
    	
        $response['resp'] = json_decode($resp);
        
         switch($response['resp']->status) {
            case 'success': // success
                $txn_status = '1';
                $status = 'SUCCESS';
                break;
            case 'failure': // failed
                $txn_status = '2';
                $status = 'FAILED';
                break;
            default: // pending
                $txn_status = '3';
                $status = 'PENDING';
                break;
        }
        
        $response['payid'] = $response['resp']->payid;
        $response['txn_reference'] = $clientuniqueid;
        $response['message'] = $response['resp']->message;
        if(isset($response['resp']->txstatus_desc))
            $response['status'] = $response['resp']->txstatus_desc;
        else
            $response['status'] = $response['resp']->status;
        $response['number'] = $customer_number;
        $response['txn_amount'] = $amount;

	return $response;
    } 
    
    //for checkStatus_sendPay2all
    public function checkStatus_sendPay2all($payid) {
        //   print_r($payid); die;
        // active_api
        $active_api = $this->active_telecom_api();
        $apiUrl = $this->api['Pay2All']['apiUrl'];
        $api_token = $this->api['Pay2All']['api_token'];
        $api_params = 'get-status?api_token='.$api_token.'&payid='.$payid;	
				
        // build url with parameters
        $url = $apiUrl.$api_params;
        //print_r($url); die;
        // Get cURL resource
        $curl = curl_init(); 
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url
        ));

        $response['status'] = 0;
  
        if($resp = curl_exec($curl)) {
          $response['status'] = 1;
        }
        curl_close($curl);

        $response['api'] = 'Pay2all';
        
        $response['resp'] = json_decode($resp);
       // print_r($response['resp']); die;
        if(!empty($response['resp']->status)) {
            $response['status'] = $response['resp']->status;
            $response['message'] = $response['resp']->message;
            $response['operator_ref'] = $response['resp']->operator_ref;
        }
        else
            $response['status'] = 2;
           // print_r($response['status']); die;
		return $response;
    }

}

