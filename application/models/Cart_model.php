<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends MY_Model {
  protected $table = 'cart_master_temp';
  
  public function __construct() {
    
    parent::__construct();  
  }
  
  public function remove_product(array $cart_item, array $where) {
    $this->db->where_in('id', $cart_item)
             ->where($where);
    
    if($this->db->delete($this->table)) {
        return TRUE;
    }
    return FALSE;
  }
  
  public function cart_product($condition, $product_id = array(), $fieldArray = array('*')) {
      $this->db->select($fieldArray)
               ->from($this->table)
               ->where($condition);
      if(!empty($product_id)) {
          $this->db->where_in('prod_id', $product_id);
      }
      
      return $this->db->get()->result_array();
  }
  
  public function cart_list($condition = array(), $fieldArray = array('*')) {
      
      $this->db->select($fieldArray)
               ->from($this->table.' as cmt')
               ->join('product_master pm', 'pm.prod_id=cmt.prod_id')
               ->where($condition);
      return $this->db->get()->result_array();            
  }
  
}