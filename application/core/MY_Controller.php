<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
     
   
    public function __construct() {
        parent:: __construct();
    }      

 /**
 * for routing ajax pages
 */

    public function ajax($page = NULL){
        
        if($page == NULL) {
           show_404();
        }else{            
            if($this->input->is_ajax_request()) {
                $page = str_replace('-', '_', $page);
                $method = $page;
                $this->{$method}();
            }else{
                show_404();
            }
            
        }
    } 

protected function get_bank_ifc_detail($ifc_code) {
      $this->load->library('bank_ifc');
      $this->bank_ifc->ifc_code = $ifc_code;

      return $this->bank_ifc->get_data();
}

protected function update_order() {
    $this->load->model('order_model');
    if($this->order_model->update_customer_order($this->input->post('id'))) {
            $response['status']= 'OK';
            $response['message']= 'Well, order status has been updated';
            echo json_encode($response);
        }else{
            $this->helper_model->show_ajax_error();
        }
}

protected function delete_order() {
    $this->load->model('order_model');
    
    $deleteId = explode(',', $this->input->post('id'));
    $deleteIdCount = count($deleteId);
    
    if($this->order_model->delete_customer_order($deleteId)) { 
        $response['status']= 'OK';
        $message = ($deleteIdCount > 1) ? 'Well, '.$deleteIdCount.' orders' : 'Well, order';
        
        $response['message']= $message.' has been deleted permenently.';
      }else{
          $response['status']= 'ERR';
          $response['message']= 'Sorry...we couldn\'t process right now please try later';
      }
      die(json_encode($response));
}


protected function load_bank_details(){
        
    $this->load->config('bank_detail', TRUE );
    $this->load->config('payment_method', TRUE );
    
    $config = $this->config->config;
    
    $this->data['bank_data'] = (object) $config['bank_detail']; 
        
        $this->load->view('supplier/ajax/bank_detail', $this->data);      
}

}