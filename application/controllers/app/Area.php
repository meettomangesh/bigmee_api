<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/REST_Controller.php';

class Area extends REST_Controller {
   public function __construct() {
        parent::__construct();
    }
    
    public function index_get() {
        $this->load->helper('file');
        $data = read_file('./cachedata/area.json');
        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => json_decode($data, true)));
    }
    
    public function geocode_post() {
    $zipCode = $this->post('zipcode') ;
        $this->load->library('geocode');
        $this->geocode->zip_code = $zipCode;
        $data = $this->geocode->get_data();
        $data = isset($data['results'][0]['address_components']) ? $data['results'][0]['address_components'] : array();
        
        foreach($data as $row) {
            if(isset($row['types']) && is_array($row['types']) && in_array('postal_code', $row['types'])) {
                $response['zipCode'] = $row['long_name'];
            }
            if(isset($row['types']) && is_array($row['types']) && in_array('locality', $row['types'])) {
                $response['locality'] = $row['long_name'];
            }
            if(isset($row['types']) && is_array($row['types']) && in_array('administrative_area_level_2', $row['types'])) {
                $response['city'] = $row['long_name'];
            }
            if(isset($row['types']) && is_array($row['types']) && in_array('administrative_area_level_1', $row['types'])) {
                $response['state'] = $row['long_name'];
            }
            if(isset($row['types']) && is_array($row['types']) && in_array('country', $row['types'])) {
                $response['country'] = $row['long_name'];
            }
        }
        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $response));
    }
}