<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Custom_pagination {
    
    private $CI ;
    public $cper_page  = 9;
    public $cnum_links = 4;
    public $ctotal_rows = 0;
     
    
    public function __construct() {
       $this->CI =& get_instance();
       $this->CI->load->library('pagination');
    }
 
    
 public function loadPagination() {
        
        $config["base_url"] = base_url("pages/product-view");
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE; 
        $config['reuse_query_string'] = TRUE;
        $config['sufix'] = '?base_cat='.$this->input->get('base_cat');
        $config['num_links'] = $this->cnum_links;
        $config["per_page"] = $this->cper_page;
        $config["total_rows"] = $this->ctotal_row;
        $config['num_links'] = $this->ctotal_row;
        $config['full_tag_open'] = '<ul><li>';
        $config['full_tag_close'] = '</li></ul>';
        $config['cur_tag_open'] = '<a class="active">';
        $config['cur_tag_close'] = '</a>';
        $config['next_tag_open'] = '<a>';
        $config['next_tag_close'] = '</a>';
        $config['prev_tag_open'] = '<a>';
        $config['prev_tag_close'] = '</a>';
        $config['next_link'] = '<i class="fa fa-arrow-right"></i>';
        $config['prev_link'] = '<i class="fa fa-arrow-left"></i>';
        
        $this->CI->pagination->initialize($config);
     } 
      
}