<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cm_model extends MY_model {
  
  
  public function __construct() {
    
    parent::__construct();  
        $this->acct_role = $this->session->userdata("type");
  }  
   
   private function update_payment_request(array $reqstData, $id){
    
    $this->db->set($reqstData)
             ->where("payment_id", $id);
    
    if($this->db->update("payment_request")){
        return true;
    }
    return false;
   }

public function create_new_staff_member(array $postData) {

  $exist = $this->db->select('acct_id')
                    ->from('account_control')
                    ->where('acct_email', $postData['acct_email'])
                    ->or_where('acct_mobile', $postData['acct_mobile'])
                    ->get()->num_rows();
  if($exist > 0) {
    $response['status']  = 'ERR';
    $response['message'] = 'Mobile or email is already associated with another account.';
    die(json_encode($response));
  }

  $password = randPassword();
  $hashPass = md5($password);

  $cmData = $postData;
  $cmData['acct_pass'] = $hashPass;
  $cmData['access_area'] = 'CM';

  unset($cmData['state_id'], $cmData['dist_id'], $cmData['tal_id'], $cmData['pincode_id']);
  
  $area_id = NULL;
  $area_table = '';
  switch($postData['acct_role']){
      case "MA":
                $area_id = $postData['state_id']; 
                $area_table = 'sbd_area'; 
                $column = 'state_id';  
                break;
      case "AD": 
                $area_id = $postData['state_id'];
                $area_table = 'sbd_area'; 
                $column = 'state_id';
                break;
      case "SU":
                $area_id = $postData['state_id'];
                $area_table = 'sbd_area'; 
                $column = 'state_id';
                break;
      case "AT":  
                $area_id = $postData['state_id'];
                $area_table = 'sbd_area'; 
                $column = 'state_id';
                break;
      case "SL":  
                $area_id = $postData['state_id'];
                $area_table = 'sbd_area'; 
                $column = 'state_id';
                break;
      case "SBD":
                $cmData['access_area'] = 'OM'; 
                $area_id = $postData['state_id'];
                $area_table = 'sbd_area';
                $column = 'state_id'; 
                break;
      case "DBD":
                $cmData['access_area'] = 'OM';  
                $area_id = $postData['dist_id'];
                $area_table = 'dbd_area'; 
                $column = 'dist_id';
                break;
      case "TBD":
                $cmData['access_area'] = 'OM';
                $area_id = $postData['pincode_id'];
                $area_table = 'tbd_area'; 
                $column = 'pincode_id';
                break;
      case "AG":
                $cmData['access_area'] = 'OM'; 
                $area_id = $postData['pincode_id'];
                $area_table = 'tbd_area'; 
                $column = 'pincode_id'; 
                break;
      case "FC":
                $cmData['access_area'] = 'OM';  
                $area_id = $postData['dist_id'];
                $area_table = 'dbd_area'; 
                $column = 'dist_id';
                break;
  }


  $cnt = $this->db->select($area_table.'.acct_id')
                  ->from($area_table)
                  ->join('account_control ac', 'ac.acct_id='.$area_table.'.acct_id')
                  ->where($column, $area_id)
                  ->where('acct_role', $postData['acct_role'])
                  ->get()->num_rows();
 if($cnt > 0){
  $response['status']  = 'ERR';
  $response['message'] = 'This area was assigned for another account.';
  die(json_encode($response));
 } 
  $last_id = $this->add_account_user($cmData); 

  if($this->add_account_area($last_id, $area_id, $area_table)){

    $this->email_notification->subject = "Account registered on bigmee as ".$postData['acct_role'].' role';
    $this->email_notification->to = $postData['acct_email'];
    $this->email_notification->message = 'Dear user,<br>
                                                     <p>Welcome in bigmee network, your account was registered successfully on bigmee at '.dateTime().'. Your registered email id is '.$postData['acct_email'].' , Your account  password is <b>'.$password.'</b></p>
                                                     <p>for login account <a href="'.link_url('admin').'" target="_new">click here.</a>
                                                     </p><br><b>Thank You</b>';
                $this->email_notification->sendMail();
                
                $this->sms_notification->textmessage = 'Dear user, Welcome in bigmee network, your account was registered successfully on bigmee at '.dateTime().'. Your registered email id is '.$postData['acct_email'].' and password is '.$password.' for login account '.base_url('admin');
                $this->sms_notification->sendMessage($postData['acct_mobile']);
    return true;
  }
  return false;

}

private function add_account_user($data) {

    $this->db->set($data);
    if($this->db->insert('account_control')){
        return $this->db->insert_id();
    }
  return false;
}

private function add_account_area($acct_id, $area_id, $area_table) {
  switch($area_table){
    case 'sbd_area':
                    $area['acct_id']  = $acct_id;
                    $area['state_id'] = $area_id;
                    $table = $area_table;
                    break;
    case 'dbd_area': 
                    $area['acct_id']  = $acct_id;
                    $area['dist_id'] = $area_id;
                    $table = $area_table;
                    break;
    case 'tbd_area':
                    $area['acct_id']  = $acct_id;
                    $area['pincode_id'] = $area_id;
                    $table = $area_table;
                    break;                    
  }                  

  $this->db->set($area);
  if($this->db->insert($table)){
    return true;
  }
  return false;

}


public function reset_staff_user_password($newPass, $acct_id) {
  $hashPass = md5($newPass);

  $this->db->set('acct_pass', $hashPass)
           ->where('acct_id', $acct_id);

  if($this->db->update('account_control')){
    return true;
  }
  return false;

}   

   public function get_user_list($plan_list = NULL, $isCount = FALSE) {
      
      if($isCount == TRUE) {
          $fieldArray = array('COUNT(ua.uacct_id) as totalCount');
      }else{
          $fieldArray = array('cp.c_name','ua.uacct_id','uacct_suid','ua.uacct_addon','ua.uacct_email','ua.primary_contact','ua.user_name','ua.uacct_status','ua.acct_balance','ua.uacct_type','mc.mcat_name','ua.uacct_validity','sbu.upline_uacct_id');
      }
      $this->db->select($fieldArray);
            
      $this->db->distinct()
               ->from("user_account ua")
               ->join("supplier_binary_upline sbu", "sbu.uacct_id=ua.uacct_id")
               ->join('main_category mc', 'mc.mcat_id=ua.mcat_id')
               ->join('company_profile cp', 'cp.uacct_id=ua.uacct_id');
      
      if($isCount == FALSE) {
           $this->db->group_by('ua.uacct_id'); 
      }
      
      if($plan_list){            
        return $this->db->get()->result_array();

      }          

        // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'ua.uacct_id',
                         1 => 'ua.uacct_addon',
                         2 => 'ua.uacct_email',
                         3 => 'ua.primary_contact',
                         4 => 'ua.user_name',
                         5 => 'ua.uacct_status',
                         6 => 'ua.acct_balance',
                         7 => 'ua.uacct_type',
                         8 => 'mc.mcat_name',
                         9 => 'ua.uacct_validity',
                         10 => 'sbu.upline_uacct_id'  
                         );


          if($requestData['search']['value']){
                 $this->db->like('ua.user_name', $requestData['search']['value'])
                          ->or_like('ua.uacct_email', $requestData['search']['value'])
                          ->or_like('ua.primary_contact', $requestData['search']['value']);

            }else if($requestData['columns'][0]['search']['value']){
                 $this->db->where('ua.uacct_suid', $requestData['columns'][0]['search']['value']);

            }else if($requestData['columns'][5]['search']['value']){
                 $this->db->where('ua.primary_contact', $requestData['columns'][5]['search']['value']);            
          }else{
            if($requestData['columns'][1]['search']['value']){
                 $this->db->where('ua.uacct_addon >', $requestData['columns'][1]['search']['value'].' 00:00:00');
            }else{
                   $this->db->where('ua.uacct_addon >', date('Y-m-d ').' 00:00:00')
                            ->where('ua.uacct_addon <', date('Y-m-d ').' 23:59:59');
            }
            
          if($requestData['columns'][2]['search']['value']){
                 $this->db->where('ua.uacct_addon <', $requestData['columns'][2]['search']['value'].' 23:59:59');
            } 
            
          if($requestData['columns'][3]['search']['value'] != ''){
                 $this->db->where('ua.uacct_status', $requestData['columns'][3]['search']['value']);            
          }
          if($requestData['columns'][4]['search']['value']){
                 $this->db->where('ua.mcat_id', $requestData['columns'][4]['search']['value']);            
          }
         }      
                 
        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);     
        
        if($isCount == TRUE) {
            //echo $this->db->get_compiled_select(); die;
            return $this->db->get()->row()->totalCount;
        }
        
        if($requestData['start'] == '0' ){
              $this->db->limit($requestData['length']);     
         }else{
              $this->db->limit( $requestData['length'],$requestData['start']);
         }
         //echo $this->db->get_compiled_select(); die;
        $result = $this->db->get();
        return $result->result_array();        
    } 

    
  public function get_all_product_list($plan_list = NULL) {
      
      $this->db->select("*")
               ->from("product_master");
     if($plan_list) {
         return $this->db->get()->result_array();
     }

     }
    
   public function get_my_area() {
     $this->db->select("*")
                  ->from("state_list");
     return $this->db->get()->result_array();    
              
   }
    
   public function get_tbd_product_list($id) {
     $this->db->select("*")
               ->from("user_account") 
               ->join("product_master", "product_master.uacct_id=user_account.uacct_id")
               ->where("user_upline_id", $id); 
     return $this->db->get()->result_array();    
              
    }

   
   public function get_participated_event_list() {
     $this->db->select("*")
               ->from("event_master")
               ->join("event_booking", "event_master.event_id=event_booking.event_id")
               ->join("balance_transaction", "balance_transaction.txn_id=event_booking.txn_id")
               ->join('user_account', "user_account.uacct_id=balance_transaction.uacct_id");               ; 
     return $this->db->get()->result_array();   
   }
    
   public function get_all_top_product() {
     $this->db->select("*")
               ->from("user_account") 
               ->join("product_master", "product_master.uacct_id=user_account.uacct_id")
               ->join("top_product", "top_product.prod_id=product_master.prod_id")
               ->join("balance_transaction", "top_product.txn_id=balance_transaction.txn_id"); 
     return $this->db->get()->result_array();    
              
    } 
    
   public function get_all_expo_product() {
     $this->db->select("*")
               ->from("user_account") 
               ->join("product_master", "product_master.uacct_id=user_account.uacct_id")
               ->join("expo_product", "expo_product.prod_id=product_master.prod_id")
               ->join("balance_transaction", "expo_product.txn_id=balance_transaction.txn_id"); 
     return $this->db->get()->result_array();    
              
    } 

   
    // returns all target list
 public function get_target_list($plan_list = FALSE) {

    $this->db->select('*')
             ->from('business_target');
       
       if($plan_list){        
            return $this->db->get()->result_array();
      }

      // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'target_addon',
                         1 => 'target_title',
                         2 => 'target_days',
                         3 => 'target'
                         );

          if($requestData['search']['value']){
                 $this->db->like('target_title', $requestData['search']['value']);
            }

            if($requestData['columns'][0]['search']['value']){
                $this->db->where('target_addon >', $requestData['columns'][0]['search']['value'].' 00:00:00');
            }

            if($requestData['columns'][1]['search']['value']){
                $this->db->where('target_addon <', $requestData['columns'][1]['search']['value'].' 23:59:59');
            }
        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir'])
                 ->limit($requestData['start'], $requestData['length']);          
                 
        return $this->db->get()->result_array(); 
 } 

  // returns account target list
 public function get_acct_target_list($plan_list = FALSE) {

    $this->db->select('*')
             ->from('business_target')
             ->join("account_target", "account_target.target_id=business_target.target_id")
             ->join("account_control", "account_control.acct_id=account_target.acct_id");
        if($plan_list){
          return $this->db->get()->result_array();
        }
// for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'acct_target_addon',
                         1 => 'account_target.acct_id',
                         2 => 'acct_role',
                         3 => 'target_title',
                         4 => 'total_target',
                         5 => 'complete_target',
                         6 => 'target_validity',
                         7 => 'target_status'
                         );

            if($requestData['columns'][0]['search']['value']){
                $this->db->where('acct_target_addon >', $requestData['columns'][0]['search']['value'].' 00:00:00');
            }

            if($requestData['columns'][1]['search']['value']){
                $this->db->where('acct_target_addon <', $requestData['columns'][1]['search']['value'].' 23:59:59');
            }

            if($requestData['columns'][2]['search']['value']){
                $this->db->where('account_target.acct_id', $requestData['columns'][2]['search']['value'].' 23:59:59');
            }

            if($requestData['columns'][3]['search']['value'] != ''){
                $this->db->where('target_status', $requestData['columns'][3]['search']['value'].' 23:59:59');
            }
        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir'])
                 ->limit($requestData['start'], $requestData['length']);          
                 
        return $this->db->get()->result_array();              
 }
 
  // returns all staff list
 public function get_staff_list($plan_list = FALSE, $isCount = FALSE) {
    
    if($isCount == TRUE) {
        $fieldArray = array('COUNT(acct_id) as totalCount');
    }else{
        $fieldArray = array('acct_addon','acct_id','acct_role','user_name','user_pincode','acct_mobile','acct_email','acct_status','acct_balance');
    }
    
    $this->db->select($fieldArray)
             ->from('account_control');
    if($plan_list){         
      return $this->db->get()->result_array();
    }

         // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'acct_addon',
                         1 => 'account_control.acct_id',
                         2 => 'acct_role',
                         3 => 'user_name',
                         4 => 'user_pincode',
                         5 => 'acct_mobile',
                         6 => 'acct_email',
                         7 => 'acct_status',
                         8 => 'acct_balance'
                         );

        
            if($requestData['columns'][0]['search']['value']){
                $this->db->where('account_control.acct_id', $requestData['columns'][0]['search']['value']);
            }
            if($requestData['columns'][1]['search']['value']){
                $this->db->where('acct_addon >', $requestData['columns'][1]['search']['value'].' 00:00:00');
            }

            if($requestData['columns'][2]['search']['value']){
                $this->db->where('acct_addon <', $requestData['columns'][2]['search']['value'].' 23:59:59');
            }

            if($requestData['columns'][3]['search']['value']){
                $this->db->where('acct_mobile', $requestData['columns'][3]['search']['value']);
            }
            if($requestData['columns'][4]['search']['value'] != ''){
                $this->db->where('acct_email', $requestData['columns'][4]['search']['value']);
            }
            if($requestData['columns'][5]['search']['value'] != ''){
                $this->db->where('acct_status', $requestData['columns'][5]['search']['value']);
            }

        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);         
        
        if($isCount == TRUE) {
            //echo $this->db->get_compiled_select(); die;
            return $this->db->get()->row()->totalCount;
        }  
        if($requestData['start'] == '0' ){
          $this->db->limit($requestData['length']);     
         }else{
          $this->db->limit( $requestData['length'],$requestData['start']);
         }          
                 
        return $this->db->get()->result_array();   

 }    

  // returns staff list for target account 
 public function get_staff_list_for_target() {

    $role = array("SBD", "DBD","TBD");

    $this->db->select('*')
             ->from('account_control')
             ->join("account_control_upline", 'account_control.acct_id=account_control_upline.acct_id')
             ->where_in("acct_role", $role);
    return $this->db->get()->result_array();
    
 }  
 
 public function create_main_category() {
    $postData = array("mcat_name" => $this->input->post("cat_name"),
                      "mcat_icon" => $this->input->post("cat_icon")
                      );
    
    $this->db->select("*")
             ->from("main_category")
             ->where("mcat_name", $this->input->post("cat_name"));
    if($this->db->get()->num_rows() > 0 ){
        $response['status']  = "ERR";
        $response['message'] = "Sorry, this category is already created";
        echo json_encode( $response );
        die();
    }
    
   $this->db->insert("main_category", $postData);
   return true;          
 }
 
 public function update_main_category_content(){
    $postData = array("mcat_name" => $this->input->post("cat_name"),
                      "mcat_icon" => $this->input->post("cat_icon")
                      );
                      
    $catId = $this->input->post("id");
    
    $this->db->select("*")
             ->from("main_category")
             ->where("mcat_name", $this->input->post("cat_name"))
             ->where_not_in("mcat_id", $catId);
                     
    if($this->db->get()->num_rows() > 0 ){
        $response['status']  = "ERR";
        $response['message'] = "Sorry, this category is already created";
        echo json_encode( $response );
        die();
        
    }
    
   $this->db->set($postData)
            ->where("mcat_id", $catId)
            ->update("main_category");
   return true;
    
 }

public function get_table_main_category($isCount = FALSE){

       if($isCount == TRUE) {
        $fieldArray = array('COUNT(mcat_id) as totalCount');
       }else{
        $fieldArray = array('*');           
       }
        $this->db->select($fieldArray)
                 ->from('main_category');

         // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'mcat_addon',
                         1 => 'mcat_name'
                         );

          if($requestData['search']['value']){
                 $this->db->like('mcat_name', $requestData['search']['value']);
            }

        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);
        
        if($isCount == TRUE) {
            //echo $this->db->get_compiled_select(); die;
            return $this->db->get()->row()->totalCount;
        }  
        if($requestData['start'] == '0' ){
          $this->db->limit($requestData['length']);     
         }else{
          $this->db->limit( $requestData['length'],$requestData['start']);
         }
                 
        return $this->db->get()->result_array();   

}

public function get_table_business_category($isCount = FALSE){

       if($isCount == TRUE) {
        $fieldArray = array('COUNT(bc.bcat_id) as totalCount');
       }else{
        $fieldArray = array('bc.bcat_id','bc.bcat_name','mc.mcat_name', 'bc.bcat_addon');           
       }
        $this->db->select($fieldArray)
                 ->from('business_category bc')
                 ->join('main_category mc', 'mc.mcat_id=bc.mcat_id');

         // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'bc.bcat_addon',
                         1 => 'bc.bcat_name',
                         2 => 'mc.mcat_name'
                         );

          if($requestData['search']['value']){
                 $this->db->like('bc.bcat_name', $requestData['search']['value'])
                          ->or_like('mc.mcat_name', $requestData['search']['value']);
            }

        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);          
        
        if($isCount == TRUE) {
            //echo $this->db->get_compiled_select(); die;
            return $this->db->get()->row()->totalCount;
        }  
        if($requestData['start'] == '0' ){
          $this->db->limit($requestData['length']);     
         }else{
          $this->db->limit( $requestData['length'],$requestData['start']);
         }
         
        return $this->db->get()->result_array();   

}

 
  public function create_business_category() {
    $postData = array("bcat_name" => $this->input->post("cat_name"),
                      "mcat_id"   => $this->input->post("mcat_name")); 
    
    $this->db->select("*")
             ->from("business_category")
             ->where("bcat_name", $postData['bcat_name']);
    if($this->db->get()->num_rows() > 0 ){
        $response['status']  = "ERR";
        $response['message'] = "Sorry, this category is already created";
        echo json_encode( $response );
        die();
    }
    
   $this->db->insert("business_category", $postData);
   return true;          
 }
 
 public function update_business_category_content(){
    $postData = array("bcat_name" => $this->input->post("cat_name"),
                      "mcat_id"   => $this->input->post("mcat_name"));
                       
    $catId = $this->input->post("id");
    $this->db->select("*")
             ->from("business_category")
             ->where("bcat_name", $postData['bcat_name'])
             ->where_not_in("bcat_id", $catId);
                     
    if($this->db->get()->num_rows() > 0 ){
        $response['status']  = "ERR";
        $response['message'] = "Sorry, this category is already created";
        echo json_encode( $response );
        die();
    }
    
   $this->db->set($postData)
            ->where("bcat_id", $catId)
            ->update("business_category");
   return true;
    
 } 
 
 // returns all news
 public function get_news_list($plane_list = FALSE) {
    $this->db->select("*")
             ->from("company_news");
    
    if($plane_list){
          return $this->db->get()->result_array();

    }
         // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'news_addon',
                         1 => 'news_title'
                         );

          if($requestData['search']['value']){
                 $this->db->like('news_title', $requestData['search']['value'])
                          ->or_like('news_content', $requestData['search']['value']);
            }

            if($requestData['columns'][0]['search']['value']){
                $this->db->where('news_addon >', $requestData['columns'][0]['search']['value'].' 00:00:00');
            }

            if($requestData['columns'][1]['search']['value']){
                $this->db->where('news_addon <', $requestData['columns'][1]['search']['value'].' 23:59:59');
            }
                         

        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir'])
                 ->limit($requestData['start'], $requestData['length']); 


    return $this->db->get()->result_array();         
    
  } 
 
 public function create_news() {
    $postData = array("news_title"    => $this->input->post("news_title"),
                      "news_content"  => $this->input->post("news_content")
                        );
              
     if($this->db->insert("company_news", $postData)){
        return true;                
     }
     return false;
 }

 public function delete_news_data($news_id) {

    $this->db->where("news_id", $news_id);
    $this->db->delete('news_broadcasting');

    $this->db->where("news_id", $news_id);
    if($this->db->delete('company_news')){
      return true;
    }    
  return false;

 }

 public function update_news_content() {
    $postData = array("news_title"    => $this->input->post("news_title"),
                      "news_content"  => $this->input->post("news_content")
                        );
                        
    $newsId = $this->input->post("id");
    
        $this->db->set($postData)
                 ->where("news_id", $newsId);  
                       
     if($this->db->update("company_news")){
        return true;                
     }
     return false;
 }

 // returns all news
 public function get_table_broadcasted_news() {
    
    $this->db->select("*")
             ->from("news_broadcasting")
             ->join('company_news', 'company_news.news_id=news_broadcasting.news_id');

         // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'broadcast_addon',
                         1 => 'news_title',
                         2 => 'broadcast_status',
                         3 => 'role_wise',
                         4 => 'news_type'
                         );

          if($requestData['search']['value']){
                 $this->db->like('news_title', $requestData['search']['value'])
                          ->or_like('news_content', $requestData['search']['value'])
                          ->or_like('role_wise', $requestData['search']['value']);
            }
            if($requestData['columns'][0]['search']['value']){
                $this->db->where('broadcast_addon >', $requestData['columns'][0]['search']['value'].' 00:00:00');
            }

            if($requestData['columns'][1]['search']['value']){
                $this->db->where('broadcast_addon <', $requestData['columns'][1]['search']['value'].' 23:59:59');
            }

            if($requestData['columns'][2]['search']['value']){
                $this->db->where('role_wise', $requestData['columns'][2]['search']['value']);
            }
            if($requestData['columns'][3]['search']['value'] != ''){
                $this->db->where('news_type', $requestData['columns'][3]['search']['value']);
            }
            if($requestData['columns'][4]['search']['value'] != ''){
                $this->db->where('broadcast_status', $requestData['columns'][4]['search']['value']);
            }

        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir'])
                 ->limit($requestData['start'], $requestData['length']); 


    return $this->db->get()->result_array();         
    
  } 
 
 
 public function broadcast_news() {
                         
    foreach($this->input->post("accounts[]") as $key => $role){
         $this->db->insert("news_broadcasting", array("news_id" => $this->input->post("news_title"),
                           "news_type"=> $this->input->post("news_type"), "role_wise" =>  $role ));
    }
   return true;                               
 }
 
 public function change_broadcast_news_status($news_id) {

    $newsData = $this->get_broadcasted_news_byid($news_id);

    if($newsData){
        if($newsData->broadcast_status == 1){
            $status = 0;
            $return = "Disabled";
        }else{
            $status = 1;
            $return = "Enabled";
        }
        
        $this->db->set("broadcast_status", $status)
                 ->where("broadcast_id", $news_id);
        if($this->db->update("news_broadcasting")){
            return $return;    
        }
        return false;  
                 
                 
        }
    }

 public function delete_broadcasted_news_data($news_id) {

    $this->db->where("broadcast_id", $news_id);

    if($this->db->delete('news_broadcasting')){
      return true;
    }    
  return false;

 }


public function create_new_events($fileName) {
    $postData = array("event_title"     => $this->input->post("event_title"),
                      "event_date"      => $this->input->post("event_date"),
                      "event_price"     => $this->input->post("event_price"),
                      "event_place"    => $this->input->post("event_place"),
                      "event_addr"      => $this->input->post("event_addr"),
                      "event_detail"    => $this->input->post("event_desc"),
                      "event_img"       => $fileName
                      );
                      
    if($this->db->insert("event_master", $postData)) {
        return true;
    }
    return false;
}

public function update_event($fileName = NULL) {
    $id = $this->input->post("id");
    
    $postData = array("event_title"     => $this->input->post("event_title"),
                      "event_date"      => $this->input->post("event_date"),
                      "event_price"     => $this->input->post("event_price"),
                      "event_place"    => $this->input->post("event_place"),
                      "event_addr"      => $this->input->post("event_addr"),
                      "event_detail"    => $this->input->post("event_desc")
                      );
    // if file is uploaded                  
    if($fileName){
        $postData['event_img'] = $fileName;
        $eventData = $this->get_event_byid($id);
        $old_img = "./dist/img/event/".$eventData->event_img;
        if(file_exists($old_img)){
            unlink($old_img);
        }
    }
    
    
    $this->db->set($postData)
             ->where("event_id", $id);   
                      
    if($this->db->update("event_master")) {
        return true;
    }
    return false;
}

public function delete_created_event($event_id) {

  $eventImg = $this->admin_model->get_event_gallery_byid($event_id);
  $eventData = $this->admin_model->get_event_byid($event_id); 
  return true;

}

public function get_event_gallery_byid($id) {
        $this->db->select("*")
             ->from("event_gallery")
             ->join("event_master", "event_master.event_id=event_gallery.event_id")
             ->where("egallery_id", $id);
        return $this->db->get()->row();     
}

public function upload_event_gallery_image($fileName) {
    
    $event_id = $this->input->post("id");
    
    $postData = array("event_id"      => $event_id,
                      "egallery_img"  => $fileName 
                      );
                                            
        $this->db->select("*")
             ->from("event_gallery")
             ->where("event_id", $event_id);   
             
    if($this->db->get()->num_rows() >= 3){
        $response['status']  = "ERR";
        $response['message'] = "you can upload maximum three images for each event";
        echo json_encode($response);
        die();
    }        
    
   if($this->db->insert("event_gallery", $postData)){
        return true;
   }
   return false;
     
}

 public function delete_event_gallery_single_image() {
    $id = $this->input->post("id");
    
    $galleryData = $this->get_gallery_img_byid($id); 

    $old_img = "./dist/img/event/alt".$galleryData->egallery_img;
    
    $this->db->where("egallery_id", $id);
    if($this->db->delete("event_gallery")){
        if(file_exists($old_img)){
            unlink($old_img);
        }
        return true;
    }       
    return false;
 }
 
 public function arrange_expo() {
    
    $postData = array("expo_title"    => $this->input->post("e_title"),
                      "expstart_date" => $this->input->post("e_start"),
                      "expend_date"   => $this->input->post("e_end"),
                      "about_expo"    => $this->input->post("e_about"),
                      "expo_charge"   => $this->input->post("e_price"),
                      "mcat_id"       => $this->input->post("e_category")
                      );
 if($this->db->insert("company_expo", $postData)){
    return true;
 }            
 return false;         
                      
 } 
 
 public function update_expo_info() {
    $id = $this->input->post("id");

    $postData = array("expo_title"    => $this->input->post("e_title"),
                      "expstart_date" => $this->input->post("e_start"),
                      "expend_date"   => $this->input->post("e_end"),
                      "about_expo"    => $this->input->post("e_about"),
                      "expo_status"   => $this->input->post("e_status"),
                      "expo_charge"   => $this->input->post("e_price"),
                      "mcat_id"       => $this->input->post("e_category")
                      );

    $otherExpo = array('expo_status' => 0 );
    $this->db->set($otherExpo)
             ->where('expo_id !=', $id)
             ->update("company_expo");

    $this->db->set($postData)
             ->where("expo_id", $id);                        
 if($this->db->update("company_expo")){
    return true;
 }            
 return false;         
    
 }
 
 public function get_sms_api_list() {
    $this->db->select("*")
             ->from("sms_api");


         // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'api_addon',
                         1 => 'api_name',
                         2 => 'api_status',
                         3 => 'type'
                         );

          if($requestData['search']['value']){
                 $this->db->like('api_name', $requestData['search']['value']);
            }

        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir'])
                 ->limit($requestData['start'], $requestData['length']);  


    return $this->db->get()->result_array();         
 }

 public function get_active_message_api() {
    return $this->db->select("api_id")
                ->from("sms_api")
                ->where(array('api_status' => 1, 'type' => 'sms'))
                ->get()->row();
 }

public function update_message_api(array $postData, $condition) {

    // first set all other api 0
    $this->db->set("api_status", 0)
             ->where('type', $condition['type'])
             ->update('sms_api');

    $this->db->set($postData)
             ->where('api_id', $condition['api_id']);

    if($this->db->update('sms_api')) {
      return TRUE;
    }
  
    return FALSE;

}

public function create_target() {
    $postData = array("target_title"    => $this->input->post("t_title"),
                      "target_days"     => $this->input->post("t_days"),
                      "target"          => $this->input->post("t_target")
                      );
                   
    if($this->db->insert("business_target", $postData)) {
        return true;
    }               
    
    return false;   
    
} 


public function update_target_info($id) {
    $postData = array("target_title"    => $this->input->post("t_title"),
                      "target_days"     => $this->input->post("t_days"),
                      "target"          => $this->input->post("t_target")
                      );
                      
    $this->db->set($postData)
             ->where("target_id", $id);                  
    if($this->db->update("business_target")) {
        return true;
    }               
    
    return false;   
    
} 

public function set_account_target(array $postData) {

    $targetData = $this->get_target_byid($postData['target_id']);


    $date = strtotime(date('ymd'));
    $date = strtotime("+$targetData->target_days day", $date);
    $validity = date('Y-m-d', $date); 

    $postData['target_validity'] = $validity;
    $postData['total_target'] = $targetData->target;

    if($this->db->insert("account_target", $postData)) {
        return true;
    }               
    
    return false;   
}

public function account_target_byid($acct_target_id) {
  return $this->db->select('*')
                  ->from('account_target')
                  ->join('business_target', 'business_target.target_id=account_target.target_id')
                  ->where('account_target.acct_target_id', $acct_target_id)
                  ->get()->row();
}

public function update_staff_account_target(array $postData, $acct_target_id){

    $targetData = $this->get_target_byid($postData['target_id']);
    
    $date = strtotime(date('ymd'));
    $date = strtotime("+$targetData->target_days day", $date);
    $validity = date('Y-m-d', $date); 

    $postData['target_validity'] = $validity;
    $postData['total_target'] = $targetData->target;

  $this->db->set($postData)
           ->where('acct_target_id', $acct_target_id);

   if($this->db->update('account_target')){
      return true;
   } 

  return false;
}

public function delete_staff_account_target($acct_target_id) {

  $this->db->where('acct_target_id', $acct_target_id);
    if($this->db->delete('account_target')){
      return true;
    }

  return false;
}

public function change_top_product_status_info() { 
    $id  = $this->input->post("id");
    
     $postData = array('top_prod_status' => $this->input->post("prod_status"));
     
     $prodData = $this->get_top_product_byid($id);
           
           // if post and already status is smae
           if($prodData->top_prod_status == $this->input->post("prod_status")) {
                     $response['status']  = "ERR";
                     $response['message'] = "Sorry, we couldn't change status now";
                     echo json_encode($response);
                     die();
            }
     
     
    // if status is rejected
        if($this->input->post("prod_status") == "R") {
           
            $updatedBal =  $this->get_sp_account_balance($prodData->uacct_id) + $prodData->txn_amount;
            $txnData = array('txn_type'     => 'credit',
                             'txn_reference'=> 'top product',
                             'txn_amount'   => $prodData->txn_amount,
                             'uacct_balance' => $updatedBal,
                             'uacct_id'     => $prodData->uacct_id 
                             );
                                        
                             
                // make balance transaction entry        
                 $this->make_balance_transaction($txnData);    
                    
                 if($this->update_sp_account_balance($updatedBal, $prodData->uacct_id)){ 
                    
                // update status   
                $this->db->set($postData)
                         ->where('top_prod_id', $id)
                         ->update("top_product"); 
                 
                     $response['status']  = "OK";
                     $response['message'] = "Top product regected and amount is credited to user account";
                     echo json_encode($response);
                     die();
                }
        }
             
       // if status is Accept   
        if($this->input->post("prod_status") == "T") {
            
            if($prodData->top_prod_status == "F") {
                // update status   
                $this->db->set($postData)
                         ->where('top_prod_id', $id)
                         ->update("top_product");
                return true;         
            }
            
            $updatedBal =  $this->get_sp_account_balance($prodData->uacct_id) - $prodData->txn_amount;
            $txnData = array('txn_type'     => 'debit',
                             'txn_reference'=> 'top product',
                             'txn_amount'   => $prodData->txn_amount,
                             'uacct_balance' => $updatedBal,
                             'uacct_id'     => $prodData->uacct_id 
                             );
                                        
                             
                // make balance transaction entry        
                 $this->make_balance_transaction($txnData);    
                    
                 if($this->update_sp_account_balance($updatedBal, $prodData->uacct_id)){ 
                    
                // update status   
                $this->db->set($postData)
                         ->where('top_prod_id', $id)
                         ->update("top_product"); 
                         
                     $response['status']  = "OK";
                     $response['message'] = "Top product Accepted and amount is debited from user account";
                     echo json_encode($response);
                     die();
                }
            }  
     
  }   
 

public function change_expo_product_status_info() { 
    $id  = $this->input->post("id");
    
     $postData = array('expo_prod_status' => $this->input->post("prod_status"));
     
     $prodData = $this->get_expo_product_byid($id);
           
           // if post and already status is smae
           if($prodData->expo_prod_status == $this->input->post("prod_status")) {
                     $response['status']  = "ERR";
                     $response['message'] = "Sorry, we couldn't change status now";
                     echo json_encode($response);
                     die();
            }
     
     
    // if status is rejected
        if($this->input->post("prod_status") == "R") {
           
            $updatedBal =  $this->get_sp_account_balance($prodData->uacct_id) + $prodData->txn_amount;
            $txnData = array('txn_type'     => 'credit',
                             'txn_reference'=> 'expo product',
                             'txn_amount'   => $prodData->txn_amount,
                             'uacct_balance' => $updatedBal,
                             'uacct_id'     => $prodData->uacct_id 
                             );
                                        
                             
                // make balance transaction entry        
                 $this->make_balance_transaction($txnData);    
                    
                 if($this->update_sp_account_balance($updatedBal, $prodData->uacct_id)){ 
                    
                // update status   
                $this->db->set($postData)
                         ->where('expo_prod_id', $id)
                         ->update("expo_product"); 
                 
                     $response['status']  = "OK";
                     $response['message'] = "Expo product rejected and amount is credited to user account";
                     echo json_encode($response);
                     die();
                }
        }
             
       // if status is Accept   
        if($this->input->post("prod_status") == "T") {
            
            if($prodData->expo_prod_status == "F") {
                // update status   
                $this->db->set($postData)
                         ->where('expo_prod_id', $id)
                         ->update("expo_product");
                return true;         
            }
            
            $updatedBal =  $this->get_sp_account_balance($prodData->uacct_id) - $prodData->txn_amount;
            $txnData = array('txn_type'     => 'debit',
                             'txn_reference'=> 'expo product',
                             'txn_amount'   => $prodData->txn_amount,
                             'uacct_balance' => $updatedBal,
                             'uacct_id'     => $prodData->uacct_id 
                             );
                                        
                             
                // make balance transaction entry        
                 $this->make_balance_transaction($txnData);    
                    
                 if($this->update_sp_account_balance($updatedBal, $prodData->uacct_id)){ 
                    
                // update status   
                $this->db->set($postData)
                         ->where('expo_prod_id', $id)
                         ->update("expo_product"); 
                         
                     $response['status']  = "OK";
                     $response['message'] = "Expo product Accepted and amount is debited from user account";
                     echo json_encode($response);
                     die();
                }
            }  
     
  }


public function change_adv_product_status_info() { 
    $id  = $this->input->post("id");
    
     $postData = array('adv_prod_status' => $this->input->post("prod_status"));
     
     $prodData = $this->get_adv_product_byid($id);
           
           // if post and already status is same
           if($prodData->adv_prod_status == $this->input->post("prod_status")) {
                     $response['status']  = "ERR";
                     $response['message'] = "Sorry, we couldn't change status now";
                     echo json_encode($response);
                     die();
            }
     
     
    // if status is rejected
        if($this->input->post("prod_status") == "R") {
           
            $updatedBal =  $this->get_sp_account_balance($prodData->uacct_id) + $prodData->txn_amount;
            $txnData = array('txn_type'     => 'credit',
                             'txn_reference'=> 'advertise product',
                             'txn_amount'   => $prodData->txn_amount,
                             'uacct_balance' => $updatedBal,
                             'uacct_id'     => $prodData->uacct_id 
                             );
                                        
                             
                // make balance transaction entry        
                 $this->make_balance_transaction($txnData);    
                    
                 if($this->update_sp_account_balance($updatedBal, $prodData->uacct_id)){ 
                    
                // update status   
                $this->db->set($postData)
                         ->where('adv_prod_id', $id)
                         ->update("advertise_product"); 
                 
                     $response['status']  = "OK";
                     $response['message'] = "Advertise product rejected and amount is credited to user account";
                     echo json_encode($response);
                     die();
                }
        }
             
       // if status is Accept   
        if($this->input->post("prod_status") == "T") {
            
            if($prodData->adv_prod_status == "F") {
                // update status   
                $this->db->set($postData)
                         ->where('adv_prod_id', $id)
                         ->update("advertise_product");
                return true;         
            }
            
            $updatedBal =  $this->get_sp_account_balance($prodData->uacct_id) - $prodData->txn_amount;
            $txnData = array('txn_type'     => 'debit',
                             'txn_reference'=> 'advertise product',
                             'txn_amount'   => $prodData->txn_amount,
                             'uacct_balance' => $updatedBal,
                             'uacct_id'     => $prodData->uacct_id 
                             );
                                        
                             
                // make balance transaction entry        
                 $this->make_balance_transaction($txnData);    
                    
                 if($this->update_sp_account_balance($updatedBal, $prodData->uacct_id)){ 
                    
                // update status   
                $this->db->set($postData)
                         ->where('adv_prod_id', $id)
                         ->update("advertise_product"); 
                         
                     $response['status']  = "OK";
                     $response['message'] = "Advertise product Accepted and amount is debited from user account";
                     echo json_encode($response);
                     die();
                }
            }  
     
  } 
  
  public function get_company_transaction_list($plan_list = FALSE, $isCount=FALSE) {
    
    if($isCount == TRUE) {
        $fieldArray = array();
    }else{
     $fieldArray = array('ct.ctxn_id','ct.ctxn_addon','ac.acct_id','ac.acct_mobile','ct.ctxn_amount','ct.ctxn_type','ct.cacct_balance','ct.ctxn_reference','ct.cbalance_type');   
    } 
        
    $this->db->select($fieldArray)
             ->from('company_transaction ct')
             ->join("account_control ac", "ac.acct_id=ct.acct_id", "left");
    if($plan_list){         
        return $this->db->get()->result_array();
    }   

    // for serverside data processing
        $requestData = $_POST;
        $columns = array(0 => 'ct.ctxn_id',
                         1 => 'ct.ctxn_addon',
                         2 => 'ac.acct_id',
                         3 => 'ac.acct_mobile',
                         4 => 'ct.ctxn_amount',
                         5 => 'ct.ctxn_type',
                         6 => 'ct.cacct_balance',
                         7 => 'ct.ctxn_reference',
                         8 => 'ct.cbalance_type'
                         );
                 
          if($requestData['columns'][5]['search']['value']){
                 $this->db->where('ac.acct_id', $requestData['columns'][5]['search']['value']);            
          }
          if($requestData['columns'][0]['search']['value']){
                 $this->db->where('ct.ctxn_id', $requestData['columns'][0]['search']['value']);

            }

            
          if($requestData['columns'][1]['search']['value']){
                 $this->db->where('ct.ctxn_addon >', $requestData['columns'][1]['search']['value'].' 00:00:00');
            }else{                
                  $this->db->where('ct.ctxn_addon >', date('Y-m-d 00:00:00'));  
            }
          if($requestData['columns'][2]['search']['value']){
                 $this->db->where('ct.ctxn_addon <', $requestData['columns'][2]['search']['value'].' 23:59:59');
            } 
          if($requestData['columns'][3]['search']['value']){
                 $this->db->where('ct.ctxn_type', $requestData['columns'][3]['search']['value']);            
          } 
          if($requestData['columns'][4]['search']['value'] != ''){
                 $this->db->where('ct.cbalance_type', $requestData['columns'][4]['search']['value']);            
          }
               
          $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir'])
                   ->limit($requestData['start'], $requestData['length']);     
               
        return $this->db->get()->result_array();
  }
  
  public function generate_balance() {
     
     $updatedBalace = $this->get_company_account_balance($this->session->userdata("id")) + $this->input->post("balance");
             
    $txnData = array("ctxn_type"        => "credit",
                     "ctxn_amount"      => $this->input->post("balance"),
                     "ctxn_reference"   => "system generated",
                     "cacct_balance"     => $updatedBalace,
                     "acct_id"          => $this->session->userdata("id")
                     );         
                     
    if($this->company_balance_transaction($txnData)){
        $this->update_company_account_balance($this->session->userdata('id'), $updatedBalace);
        return true;
    }
    return false;
    
  }

public function change_user_payment_status($postData) {

  $paymentData = $this->get_payment_request_byid($postData['payment_id']);

if($paymentData->payment_type == 'C'){
  switch($postData['payment_status']){

    case 'T':

    if($paymentData->payment_status == "T") {
        $response['status']  = 'ERR';
        $response['message'] = 'Sorry, this payment request is already accepted';
        echo json_encode($response);
        die();
    }
    
    $this->check_account_balance_for_transaction($paymentData->payment_balance);
    
    $uacct_bal = $this->get_sp_account_balance($paymentData->uacct_id);

    $updateBalance = $uacct_bal +  $paymentData->payment_balance;

        // credit balance to user account
                  $utxnData = array( 'txn_type'    => 'credit',
                                     'txn_reference'=> 'payment accepted',
                                     'txn_amount'   => $paymentData->payment_balance,
                                     'uacct_balance' => $updateBalance,
                                     'uacct_id'     => $paymentData->uacct_id
                                    );
            $txnId = $this->make_balance_transaction($utxnData);
            $this->update_sp_account_balance($updateBalance, $paymentData->uacct_id);
            
            // update payment request data
            $updatePayment = array('payment_status' => $postData['payment_status'],
                                   'payment_msg'    => $postData['payment_note'],
                                   'txn_id'         => $txnId
                                   ); 
             
            $this->update_payment_request($updatePayment, $postData['payment_id']);
            
            
        // debit balance from current company user's account
           $remainBalace = $this->get_company_account_balance($this->session->userdata('id')) - $paymentData->payment_balance;
           $txnData = array("ctxn_type"        => "debit",
                            "ctxn_amount"      => $paymentData->payment_balance,
                            "ctxn_reference"   => "request accepted",
                            "cacct_balance"    => $remainBalace,
                            "acct_id"          => $this->session->userdata('id')
                           );             
          $this->company_balance_transaction($txnData);
          $this->update_company_account_balance($this->session->userdata('id'), $remainBalace);
                          
    
          $response["status"]  = "OK";
          $response["message"] = "User payment request accepted and balance successfully credited";
          echo json_encode($response);

    break;

    case 'R':

    if($paymentData->payment_status == "T") {
        $response['status']  = 'ERR';
        $response['message'] = 'Sorry, you can not change status now';
        echo json_encode($response);
        die();
    }
    $updatePayment = array('payment_status' => $postData['payment_status'],
                           'payment_msg' => $postData['payment_note']
                           ); 
                                   
            if($this->update_payment_request($updatePayment, $postData['payment_id'])){
              $response["status"]  = "OK";
              $response["message"] = "User payment request has been rejected successfully";
              echo json_encode($response);
            }

    break;
  }
 }elseif($paymentData->payment_type == 'W'){

  // check request is already not rejected
      if($paymentData->payment_status == "R") {
        $response['status']  = 'ERR';
        $response['message'] = 'Sorry, this payment request is already rejected';
        echo json_encode($response);
        die();
    }

  if($postData['payment_status'] == "T"){
     $updatePayment['payment_status'] = $postData['payment_status'];
     $updatePayment['payment_msg'] = $postData['payment_note'];

    if($this->update_payment_request($updatePayment, $postData['payment_id'])){
                $response["status"]  = "OK";
                $response["message"] = "User payment withdrawal request has been accepted successfully";
                echo json_encode($response);
                die();
              }
     }elseif($postData['payment_status'] == "R"){

        $uacct_bal = $this->get_sp_account_balance($paymentData->uacct_id);

        $updateBalance = $uacct_bal +  $paymentData->payment_balance;

            // credit balance to user account
                      $utxnData = array( 'txn_type'    => 'credit',
                                         'txn_reference'=> 'withdrawal credit',
                                         'txn_amount'   => $paymentData->payment_balance,
                                         'uacct_balance' => $updateBalance,
                                         'uacct_id'     => $paymentData->uacct_id
                                        );
                $txnId = $this->make_balance_transaction($utxnData);
                $this->update_sp_account_balance($updateBalance, $paymentData->uacct_id);


     $updatePayment['payment_status'] = $postData['payment_status'];
     $updatePayment['payment_msg'] = $postData['payment_note'];
     $updatePayment['txn_id'] = $txnId;

    if($this->update_payment_request($updatePayment, $postData['payment_id'])){
                $response["status"]  = "OK";
                $response["message"] = "User payment withdrawal request has been rejected successfully";
                echo json_encode($response);
                die();
              }
     }         


 } 
    
}

public function delete_user_payment() {
    
    $this->db->where("payment_id", $this->input->post('id'));
    if($this->db->delete("payment_request")) {
        return true;
    }
  return false;  
 }
 
public function upload_banner_image($postData) {
  
        if($this->db->insert("media_banner", $postData)){
        return true;
     }
     
    return false;
}
 
public function get_banner_list() {
    
return   $this->db->select('*')
                  ->from('media_banner')
                  ->order_by('sequence','asc')
                  ->get()->result_array();
} 

public function get_banner_link() {
    
return   $this->db->select('id,link,tooltip_text,target,link_type,banner_id')
                  ->from('banner_link_association')                  
                  ->get()->result_array();
} 
  
public function delete_banner_image($id) {
$mediaData = $this->db->select('*')
                  ->from('media_banner')
                  ->where('media_id', $id)
                  ->get()->row();
 $path = './dist/img/slider/'.$mediaData->media_url;
 
 $this->db->where('media_id', $id);
 if($this->db->delete("media_banner")){
     if(file_exists($path)) {
        unlink($path);    
     }
   return true;
 }
 return false;
                   
}  

public function get_user_product_enquiry() {
     $this->db->select("*")
               ->from("product_enquiry")
               ->join("product_master", "product_master.prod_id=product_enquiry.prod_id")
               ->join('user_account', "user_account.uacct_id=product_master.uacct_id");               ; 
     return $this->db->get()->result_array();   
   }
   
public function get_user_general_enquiry() {
     $this->db->select("*")
               ->from("general_requirement");               ; 
     return $this->db->get()->result_array();   
   }

 public function upload_download_file($fileName) {
    
    $postData = array("link_name" => $this->input->post("file_name"),
                      "file_name" => $fileName
                      );
 if($this->db->insert("download_files", $postData)){
    return true;
 }            
 return false;         
                      
 }

 public function delete_download($id) {
    
    $fileData = $this->db->select('*')
                         ->from('download_files')
                         ->where('file_id', $id)
                         ->get()->row();   
   $filePath = './dist/downloads/'.$fileData->file_name;
    $this->db->where('file_id', $id);
   
   
 if($this->db->delete("download_files")){
        if(file_exists($filePath)){
            unlink($filePath);
        } 
     return true;   
   }             
   return false;                            
 }
 

 public function get_sms_api_byid($api_id) {
    return $this->db->select('*')
                    ->from('sms_api')
                    ->where('api_id', $api_id)
                    ->get()->row();  

 }

public function get_dashboard_count() { 

  $count = new stdClass();

  $user = $this->db->select('COUNT(ua.uacct_id) as totalCount')
                   ->from('user_account ua') 
                   ->where('ua.uacct_addon >', date('Y-m-d').' 00:00:00')
                   ->get()->row()->totalCount;
  $count->user_count = $user;

  $product = $this->db->select('COUNT(prod_id) as totalCount')
                      ->from('product_master')
                      ->where(array('prod_addon >'=> date('Y-m-d').' 00:00:00', 'status' => 1))
                      ->get()->row()->totalCount;
  $count->prod_count = $product;

  $prod_enquiry = $this->db->select('COUNT(enq_id) as totalCount') 
                           ->from('enquiry_master')
                           ->where('enq_addon >', date('Y-m-d').' 00:00:00')
                           ->get()->row()->totalCount; 
  $count->prod_enquiry = $prod_enquiry;


  $enquiry_master = $this->db->select('COUNT(enq_id) as totalCount') 
                              ->from('enquiry_master')
                              ->where('enq_addon >', date('Y-m-d').' 00:00:00')
                              ->get()->row()->totalCount; 
  $count->general_enquiry = $enquiry_master;

  $order_count = $this->db->select('COUNT(order_id) as totalCount') 
                              ->from('customer_orders')
                              ->where('order_addon >', date('Y-m-d').' 00:00:00')
                              ->get()->row()->totalCount; 
  $count->order_count = $order_count;
  return $count;                      

} 

   public function get_month_activities(){
    
    $data = new stdClass();
    

    $this->db->select("COUNT(pm.prod_id) as totalCount")
               ->from("product_master pm") 
               ->where('pm.prod_addon BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()')
               ->where('pm.status', 1);  
    $data->prod_count = $this->db->get()->row()->totalCount;

    $this->db->select("COUNT(uacct_id) as totalCount")
               ->from("user_account ua") 
               ->where('ua.uacct_addon BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');  
    $data->user_count = $this->db->get()->row()->totalCount;
    
    
     $this->db->select("COUNT(expo_prod_id) as totalCount")
               ->from("expo_product")
               ->where('expo_prod_addon BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()'); 
    $data->expo_count = $this->db->get()->row()->totalCount;    
    
    
     $this->db->select("COUNT(top_prod_id) as totalCount")
               ->from("top_product") 
               ->where('top_prod_addon BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');    
    $data->top_count = $this->db->get()->row()->totalCount; 

     $this->db->select("COUNT(order_id) as totalCount")
               ->from("customer_orders") 
               ->where('order_addon BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');    
    $data->order_count = $this->db->get()->row()->totalCount;       
    return $data;
    
   } 

   public function get_staff_user_byrole($role) {

      switch($role){
            case 'MA':
                      $roles = array('SA');
                      break;
            case 'AD': 
                      $roles = array('SA', 'MA');
                      break;
            case 'SU': 
                      $roles = array('SA', 'MA', 'AD');
                      break;
            case 'SL': 
                      $roles = array('SA', 'MA', 'AD');
                      break;            
            case 'AT': 
                      $roles = array('SA', 'MA', 'AD');
                      break;
            case 'SBD': 
                      $roles = array('AD');
                      break;
            case 'DBD': 
                      $roles = array('AD', 'SBD');
                      break;
            case 'TBD': 
                      $roles = array('AD', 'SBD', 'DBD');
                      break;
            case 'AG': 
                      $roles = array('SA', 'MA', 'AD');
                      break;



      }
   $this->db->select('*')
            ->from('account_control');

            foreach($roles as $role){
                $this->db->or_where('acct_role', $role );
             } 

     return $this->db->get()->result_array();

   }
   
    public function get_active_telecom_api() {
        
        $where = array('api_status'=> 1, 'type'=>'telecom');
        return $this->db->select("api_id, api_name")
                ->from("sms_api")
                ->where($where)
                ->get()->row();
    }
    
     public function get_tele_plan_by_id($id) {

        $this->db->select("*")
                ->from("telecom_plan")
                ->where("telecom_plan_id", $id);
        return $this->db->get()->row();
    }

}