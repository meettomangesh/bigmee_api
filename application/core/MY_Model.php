<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_model extends CI_Model {

    protected $uacct_id;

    public function __construct() {

        parent::__construct();
    }

// 
    protected function db_connect($db_name, $obj=TRUE) {
        $this->db = $this->load->database($db_name, $obj);
    }
    
    public function get_balance($acct_id, $type='acct_balance') {
        $this->db->select($type)
                 ->from('customer_master')
                 ->where('id', $acct_id);
            return $this->db->get()->row()->{$type};
    }
    
// make user balance transaction entry and return txn id
    public function make_balance_transaction(array $txnData) {
        $this->db->set($txnData)
                ->insert("balance_transaction");
        return $this->db->insert_id();
    }

    public function insert_data(array $postData, $table_name, $multi_insert = FALSE) {
        if ($multi_insert == TRUE) {
            $queryNodes = array();

            foreach ($postData as $row) {
                if (!is_array($row)) {
                    return FALSE;
                }

                foreach ($row as $key => $value) {
                    $temp[] = $value;
                }

                array_push($queryNodes, '(' . implode(',', $temp) . ')');
                unset($temp);
            }

            foreach ($postData[0] as $key => $value) {
                $bind_columns[] = $key;
            }

            if (count($queryNodes) > 0 && count($bind_columns) > 0) {
                $query = "INSERT INTO ";
                $query .= $table_name . " (" . implode(',', $bind_columns) . ") VALUES ";
                $query .= implode(',', $queryNodes);

                if ($this->db->query($query)) {
                    return TRUE;
                }
            }
            return FALSE;
        } else {
            $this->db->set($postData);

            if ($this->db->insert($table_name)) {
                return $this->db->insert_id();
            }
            return FALSE;
        }
    }

    public function update_data(array $postData, $table_name, array $where) {

        $this->db->set($postData)
                ->where($where);

        if ($this->db->update($table_name)) {
            return TRUE;
        }
        return FALSE;
    }

    public function delete_data($table_name, $where) {

        if ($this->db->delete($table_name, $where)) {
            return TRUE;
        }

        return FALSE;
    }

    public function get_row_byid($table_name, array $where, $fieldArray = array()) {
        $fieldArray = (count($fieldArray) > 0 ) ? $fieldArray : '*';
        $or_where = (isset($where['or_where'])) ? $where['or_where'] : array();
        unset($where['or_where']);
        
        $this->db->select($fieldArray)
                ->from($table_name)
                ->where($where);
        
        if(!empty($or_where)){
            if(count($or_where) > 1) {
                foreach($or_where as $whereClouse) {
                    $this->db->or_where($whereClouse);
                }
            }else{
                $this->db->or_where($or_where);
            }
        }
        
        return $this->db->get()->row();
    }

    public function get_data_by($table_name, $where = array(), $fieldArray = array(), $order_by = array()) {
        $fieldArray = (count($fieldArray) > 0 ) ? $fieldArray : '*';

        $this->db->select($fieldArray)
                ->from($table_name)
                ->where($where);

        if ($order_by) {
            $this->db->order_by($order_by[0], $order_by[1]);
        }

        return $this->db->get()->result_array();
    }

    public function last_update($table_name, $fieldArray = array()) {

        $fieldArray = (count($fieldArray) > 0 ) ? $fieldArray : 'id';

        $this->db->select($fieldArray)
                ->from($table_name)
                ->order_by('db_update_date', 'DESC');

        $last_id = (count($fieldArray) > 0 ) ? $this->db->get()->row() : $this->db->get()->row()->id;
        return $last_id;
    }

 public function get_active_message_api() {
    return $this->db->select("api_id")
                ->from("sms_api")
                ->where(array('api_status' => 1, 'type' => 'sms'))
                ->get()->row();
 }

}
