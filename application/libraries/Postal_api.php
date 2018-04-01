<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Postal_api class
 * Postal PIN Code API allows to get details of Post Office by searching Postal PIN Code or
 * Post Office Branch Name of India. - See more at: http://postalpincode.in/
 *
 */
class Postal_api {

	public $pincode;
	private $api_url = "http://postalpincode.in/api/";
	private $CI;

	public function __construct() {
        $this->CI =& get_instance();
	}

	public function postal_request() {
	 if(empty($this->pincode)){
	 	$response['status']  = 'ERR';
	 	$response['message'] = 'Please provide a pincode';
	 	echo json_encode($response);
	 	die();
	 }	
		// Get cURL resource
				$curl = curl_init();
				// Set some options - we are passing in a useragent too here
				curl_setopt_array($curl, array(
				    CURLOPT_RETURNTRANSFER => 1,
				    CURLOPT_URL => $this->api_url.'/pincode/'.$this->pincode
				));
				$resp = curl_exec($curl);
				curl_close($curl);
				return $resp;
			}

	public function get_data() {

        $response = json_decode($this->postal_request()); 

        if($response->Status == 'Success'){
        	$data = new stdClass();
	        $data->state = $response->PostOffice[0]->State;
	        $data->district = $response->PostOffice[0]->District;
	        $data->taluka = $response->PostOffice[0]->Taluk;
	        $data->pincode = $this->pincode;

	        $this->CI->helper_model->insert_area_data($data);
	      }else{
	      	$data['status']  = 'ERR';
	      	$data['message'] = 'Invalid pincode no response';
	      	echo json_encode($data);
	      	die();
	      } 
        return $data;
	}		

}	