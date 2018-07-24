<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mystore extends BASE_Api {
    private $customer_id;
    
    public function __construct() {
        parent::__construct();
        
        $this->customer_id = $this->{$this->input->server('REQUEST_METHOD')}('customer_id');
        
        // initialize core api dependancy 
        parent::valid_customer($this->customer_id);
        $this->load->model('mystore_model', 'mystore');
    }
    
    public function list_get() {
        $params = array(
            'limit' => ($this->get('limit')) ? $this->get('limit') : 25,
            'offset' => ($this->get('offset')) ? $this->get('offset') : 0,
            'customer_id' => $this->customer_id
        );
        $storeData = $this->mystore->get_mystore_list($params);
        
        foreach($storeData as $key=>$store) {
            $storeData[$key]['logo'] = APP_DOMAIN.'/dist/img/clogo/thumb/'.$storeData[$key]['logo'];
        }
        
        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $storeData));
    }
    
    public function add_put() {
        $postData = array(
            'uacct_id' => $this->put('supplier_id'),
            'customer_id' => $this->customer_id
        );
        
        $this->runValidation($postData);
        
        $storeExist = $this->mystore->get_row_byid('customer_mystore_list', 
                array('customer_id' => $this->customer_id, 'uacct_id' => $postData['uacct_id']), array('id'));
        
        if(count($storeExist) == 0) {
            if($this->mystore->insert_data($postData, 'customer_mystore_list')) {
                $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Store added into mystore list.'));  
            }
        }else{
            $this->response(array('status' => REST_CONTROLLER::HTTP_BAD_REQUEST, 'data' => 'Store already added into mystore list.'));
        }
    }
    
    public function remove_delete() {
        $postData = array(
            'uacct_id' => $this->delete('supplier_id'),
            'customer_id' => $this->customer_id
        );
        
        $this->runValidation($postData);
        
        $deleteResult = $this->mystore->delete_data('customer_mystore_list', 
                array('customer_id' => $this->customer_id, 'uacct_id' => $postData['uacct_id']));
        
        
        if($deleteResult) {
            $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => 'Store has been removed from mystore list.'));  
        }
    }
    
    public function search_get() {
        $postData = array(
            'query' => $this->get('query'),
            'limit' => ($this->get('limit')) ? $this->get('limit') : 50
        );
        $storeData = $this->mystore->search_store($postData);
        
        foreach($storeData as $key=>$store) {
            $storeData[$key]['logo'] = APP_DOMAIN.'/dist/img/clogo/thumb/'.$storeData[$key]['logo'];
        }
        
        $storeData = ($storeData) ? $storeData : '';
        $this->response(array('status' => REST_CONTROLLER::HTTP_OK, 'data' => $storeData));
        
    }
    
    
}
    