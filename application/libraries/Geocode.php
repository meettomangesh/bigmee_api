<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Geocode {

    public $zip_code;
    private $api_url = 'http://maps.googleapis.com/maps/api/geocode/json';

    public function retrive_data() {
        if (empty($this->zip_code)) {
            $response['status'] = 'ERR';
            $response['message'] = 'Please provide zip code.';
            die(json_encode($response));
        }
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->api_url . '?address=' .$this->zip_code
        ));
        $resp = curl_exec($curl);
        curl_close($curl);

        $decode_json = json_decode($resp, TRUE);
        
        if($decode_json['status'] == 'OK') {
            return $decode_json;
        }
    }

    public function get_data($api = NULL) {
       return SELF::retrive_data();
    }

}
