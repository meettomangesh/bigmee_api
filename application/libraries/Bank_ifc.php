<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Bank_ifc class
 * Bank IFC API allows to get details of Bank details by its IFC code or
 * Post Office Branch Name of India. - See more at: https://ifsc-api.herokuapp.com/
 *
 */
class Bank_ifc {

	public $ifc_code;
	private $api_url = "https://ifsc-api.herokuapp.com/";

	public function ifc_request() {
	 if(empty($this->ifc_code)){
	 	$response['status']  = 'ERR';
	 	$response['message'] = 'Please provide a bank IFC code';
	 	echo json_encode($response);
	 	die();
	 }	
		// Get cURL resource
				$curl = curl_init(); 
				// Set some options - we are passing in a useragent too here
				curl_setopt_array($curl, array(
				    CURLOPT_RETURNTRANSFER => 1,
				    CURLOPT_URL => $this->api_url.$this->ifc_code
				));
				$resp = curl_exec($curl);
				curl_close($curl);
				return $resp;
			}

	public function get_data() {

        $response = $this->ifc_request(); 

        $decode_json = json_decode($response);

		if( $decode_json == "Not Found" ){
			      	$data['status']  = 'ERR';
			      	$data['message'] = 'Invalid IFC code please provide valid one';
			      	echo json_encode($data);
			      	die();
			      }else{
		        	return $decode_json;
			}	
		}		

}	