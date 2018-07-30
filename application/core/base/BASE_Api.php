<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class BASE_Api extends REST_Controller {

    const SUCCESS = 'success';
    const FAILED = 'failed';

    protected $acct_role;
    protected $cu_profile;

    public function __construct() {
        parent::__construct();

        // initialize core api dependancy 
        SELF::init();
    }
    
    
    protected function valid_customer($customer_id) {
        
        if(empty($customer_id) || !is_numeric($customer_id)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Required valid customer id.'));   
        }
        
        // load common model
        $this->load->model('profile_model', 'profile');
        
        $customerData = $this->profile->get_row_byid('customer_master', 
                array('id' => $customer_id), array('id','acct_balance'));
        
        if(empty($customerData)) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Invalid customer id.'));   
        }
        $this->cu_profile = $customerData;
    }

    final public function init() {
        
    }

    protected function runValidations(array $paramArray) {
        foreach ($paramArray as $key => $value) {
            if (is_array($value)) {
                if (empty($value)) {
                    $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Required valid non empty ' . $key . ' parameter.')));
                }
            } else if ($value == '') {
                $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Required valid non empty ' . $key . ' parameter.')));
            }
        }
    }

    protected function decode_orderby($payload, array $valid_clause) {
        if (!empty($payload)) {
            $payloadArr = json_decode($payload, TRUE);
            $order = array('asc', 'desc');
            $returnArray = array();

            if (empty($payloadArr)) {
                $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Invalid order_by clause params.')));
            }

            foreach ($payloadArr as $key => $row) {
                if (is_array($row)) {
                    foreach ($row as $iKey => $iRow) {
                        if (array_search($iKey, $valid_clause) === FALSE) {
                            $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $iKey in order_by clause.")));
                        }
                        if (!in_array($iRow, $order)) {
                            $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $iRow order_by value in $iKey, allowed values are (asc,desc).")));
                        }
                        array_push($returnArray, $iKey . " " . strtoupper($iRow));
                    }
                } else {
                    if (array_search($key, $valid_clause) === FALSE) {
                        $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $key in order_by clause.")));
                    }
                    if (!in_array($row, $order)) {
                        $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $row order_by value in $key, allowed values are (asc,desc).")));
                    }
                    array_push($returnArray, $key . " " . strtoupper($row));
                }
            }
            return $returnArray;
        }
        return array();
    }

    protected function decode_searchby($payload, array $valid_clause) {
        if (!empty($payload)) {
            $payloadArr = json_decode($payload, TRUE);

            if (empty($payloadArr)) {
                $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Invalid search_by clause params.')));
            }

            foreach ($payloadArr as $key => $row) {
                if (is_array($row)) {
                    foreach ($row as $iKey => $iRow) {
                        if (array_search($iKey, $valid_clause) === FALSE) {
                            $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $iKey in search_by clause.")));
                        }
                    }
                } else {
                    if (array_search($key, $valid_clause) === FALSE) {
                        $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $key in search_by clause.")));
                    }
                }
            }
            if (isset($payloadArr[0])) {
                return $payloadArr[0];
            }
            return $payloadArr;
        }
        return array();
    }

    protected function decode_fields($payload, array $valid_field) {
        if (!empty($payload)) {
            $payloadArr = explode(',', $payload);
            $allowed_field = implode(',', $valid_field);

            if (empty($payloadArr)) {
                $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => 'Invalid search_by clause params.')));
            }

            foreach ($payloadArr as $key => $field) {
                if (array_search($field, $valid_field) === FALSE) {
                    $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => array('message' => "Invalid $field near position $key allowed fields ($allowed_field).")));
                }
            }
            return $payloadArr;
        }
        return array();
    }

    protected function role_scope($role) {
        $error = FALSE;

        if (is_array($role)) {
            if (!in_array($this->acct_role, $role)) {
                $error = TRUE;
            }
        } else if ($this->acct_role != $role) {
            $error = TRUE;
        }

        if ($error == TRUE) {
            $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_FORBIDDEN, 'data' => array('message' => 'You can not access this resource.')));
        }
    }

    public function flushcache_get() {
        $this->load->library('jsoncache');

        $file_path = $this->get('path');

        if (!empty($file_path)) {
            $this->jsoncache->delete($file_path);
            $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_FORBIDDEN, 'data' => array('message' => 'Cache cleared for given path.')));
        } else {
            $this->response(array('status' => BASE_Api::FAILED, 'code' => REST_CONTROLLER::HTTP_FORBIDDEN, 'data' => array('message' => 'Invalid cache path.')));
        }
    }

}
