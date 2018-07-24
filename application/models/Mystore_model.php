<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mystore_model extends MY_model {
    private $table = 'customer_mystore_list cml';
    public function __construct() {
        parent::__construct();
            
    }
    
    public function get_mystore_list($params = array()) {
        $fieldArray = array('cp.c_name as name', 'cp.c_logo as logo','cml.uacct_id AS supplier_id');
        
        $this->db->select($fieldArray)
                 ->from($this->table)
                 ->join('company_profile cp', 'cp.uacct_id=cml.uacct_id')
                 ->join('user_account ua', 'ua.uacct_id=cp.uacct_id')
                 ->where(array('cp.c_logo !=' => '', 'cp.c_name !=' => '', 'ua.uacct_status' => 1, 'cml.customer_id' => $params['customer_id'], 'cml.status' => 1));
        
        if(isset($params['limit']) || isset($params['offset'])) {
            $this->db->limit($params['limit'], $params['offset']);
        }
        //die($this->db->get_compiled_select());
        return $this->db->get()->result_array();
        
    }
    
    public function search_store($params = array()) {
        $fieldArray = array('cp.c_name as name', 'cp.c_logo as logo');
        
        $this->db->select($fieldArray)
                 ->from('company_profile cp')
                 ->join('user_account ua', 'ua.uacct_id=cp.uacct_id')
                 ->where(array('cp.c_logo !=' => '', 'ua.uacct_status' => 1));
        
        if(!empty($params['query'])) {
            $explodeWords = explode(' ', $params['query']);
            foreach($explodeWords as $key=>$word) {
                if($key == 0) {
                    $this->db->like('cp.c_name', "$word");
                }else{
                    $this->db->or_like('cp.c_name', "$word");
                }
            }
            
            $this->db->limit($params['limit']);
            //die($this->db->get_compiled_select());
            return $this->db->get()->result_array();
        }
    }
    
}