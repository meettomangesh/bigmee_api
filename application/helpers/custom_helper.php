<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if(!function_exists("link_url")){
    function link_url($path, $param = NULL){
        
        if($param){
            $param = "?".$param;
        }
        return  base_url().$path.".htm".$param; 
    }
    
}

if(!function_exists("set_css")) {
 function set_css(array $file){
    $styles = "";
    foreach($file as $file) {
        $styles .=  "<link rel='stylesheet' href=". base_url($file.'.css'). ">";
    }
    return $styles;
 }
}

if(!function_exists("set_js")) {
    
function set_js(array $script) {
    $scripts = "";
    foreach($script as $script) { 
        $scripts .=  "<script src=". base_url($script.'.js'). "></script>";
    }
    return $scripts;
 }

}

if(!function_exists("randFileName")) {
    
function randFileName($originalName, $optionalName = FALSE){
    $ext = pathinfo($originalName, PATHINFO_EXTENSION);

    if($optionalName){
        return $optionalName.".".$ext;
    }else{
    $string= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
           $newName = substr( str_shuffle( $string), 0, 25);
           return $newName.".".$ext;

    }

  }
  
}

if(!function_exists("randPassword")) {
    
function randPassword( $limit = 8){
    $string= "0123456789012345678901234567890123456789";
           $newPass = substr( str_shuffle( $string), 0, $limit);
           return $newPass;
    }       
  
}

if(!function_exists("randomReferId")) {
    
function randomReferId( $limit = 12){
    $string= "01234567890123456789012345678901234567890123456789";
          return $referId = "BM".substr( str_shuffle( $string), 0, $limit);
  }
  
}

if(!function_exists("generateOtp")) {
    
function generateOtp( $limit = 6){
    $string= "01234567890123456789012345678901234567890123456789";
          return substr( str_shuffle( $string), 0, $limit);
  }
  
}

if(!function_exists("account_validityDate")) {
    
function account_validityDate($day = 10, $fromDate = NULL) {
     $date = date('ymd');
         if($fromDate != NULL){
            $date = $fromDate;
         }
         $date = strtotime($date);
         $date = strtotime("+$day day", $date);
      
         return date('Y-m-d', $date)." 23:59:59";

 }
}


if(!function_exists("showData")) {
    
function showData($field, $alt = "") {
    if(!empty($field)) {
        return $field;
    }else {
        return $alt;
    }
  }
  
}

if(!function_exists("dateTime")){
    
    function dateTime($time = 1) {
        
        if($time == 1){
            $date = date('d M Y H:i:s');
            return $date." IST";
        }
        $date = date('d M Y');
        return $date;
        
    }
    
}    

if(!function_exists("formateDate")){
    
    function formateDate($date, $time = FALSE) {
        if($time){
            return date('d M Y', strtotime($date));
        }else{
            return date('d M Y H:i:s', strtotime($date));
        }
    }
 }

if(!function_exists("formateBalance")){
    
    function formateBalance($amount) {
        
      return number_format($amount,2);
    }
 }
 
 if(!function_exists("shortText")){
 function shortText($string, $limit = 20, $eclips= '...') {
    
    $short = substr($string, 0, strrpos(substr($string, 0, $limit), " "));
      if(strlen($string) > $limit ) {
        return $short.$eclips;
      }
      return $short;
    }
 }
 
  if(!function_exists("youtubeThumb")){
     function youtubeThumb($url, $video_url = NULL) {
        $pos = strrpos($url, "/");
        $vidID = ltrim(substr($url, $pos), "/");
        if($video_url == 0){
            return "http://img.youtube.com/vi/$vidID/hqdefault.jpg";
        }else{
            return " https://www.youtube.com/embed/".$vidID."?autoplay=1";
        }    
     }
 }
 
   if(!function_exists("youtubeId")){
     function youtubeId($url) {
        $pos = strrpos($url, "/");
        return ltrim(substr($url, $pos), "/");
           
     }
 }
 
 
  if(!function_exists("getTabid")){
     function getTabid($string) {
        $string = explode(' ', $string);
        return strtolower($string[0]);
     }
 }
 
  if(!function_exists("dashedUrl")){
     function dashedUrl($string) {
        $string = str_replace(' ', '-', $string);
        return strtolower($string);
     }
  }
  
  if(!function_exists("undashedUrl")){
     function undashedUrl($string) {
        $string = str_replace('-', ' ', $string);
        return ucwords($string);
     }
 }
 
  if(!function_exists("encodeUrl")){
     function encodeUrl($string) {
        $CI = & get_instance();
        $CI_enc = $CI->encrypt->encode($string);
        return str_replace(array('+', '/', '='), array('-', '_', '~'), $CI_enc);
     }
 }

  if(!function_exists("decodeUrl")){
     function decodeUrl($string) { 
        $CI = & get_instance();
        $clean_str = str_replace(array('-', '_', '~'), array('+', '/', '='), $string);
        return $CI->encrypt->decode($clean_str);
    }
 }

  if(!function_exists("discountPrice")){
     function discountPrice($discount, $price, $app = FALSE) { 
        if($discount > 0):
            $discount_amt = ($discount * $price) / 100;

                if($app == TRUE):
                    return number_format(($price - $discount_amt), 2, '.', '');
                endif;
                
            return '<i class="fa fa-inr"></i> '.number_format(($price - $discount_amt), 2, '.', '');
        
        endif;    
    }
 }

  if(!function_exists("showStockStatus")){
     function showStockStatus($status) { 
        if($status == 0):
            return "<label class='stock-status outoff-stock text-danger'>Out of Stock</label>";
        endif;    
        if($status == 1):
            return "<label class='stock-status in-stock text-success'>In Stock</label>";
        endif;
    }
 } 

if(!function_exists("supplierAccountType")){
     function supplierAccountType($type) { 
        
        switch ($type) {
          case 'CA':
                    return "Current Account";
                    break;
          case 'SA':
                    return "Savings Account";
                    break;
          case 'RD':
                    return "Recurring Deposit";
                    break;
          case 'FD':
                    return "Fixed Deposit";
                    break;
          
          default:
                    return "Default";
            break;
        }
    }
 }

 if(!function_exists("showMessageType")){
     function paymentStatus($status) { 

      switch ($status) {
        case 'F':
          $response['class']  = "info";
          $response['status'] = "Pending";
          return $response;
          break;
        
        case 'T':
          $response['class']  = "success";
          $response['status'] = "Accept";
          return $response;
          break;
        case 'R':
          $response['class']  = "danger";
          $response['status'] = "Pending";
          return $response;
          break;
        case 'C':
          $response['class']  = "warning";
          $response['status'] = "Cancelled";
          return $response;
          break;

        default:
          $response['class']  = "";
          $response['status'] = "";
          return $response;
          break;  
      }
     }

}  
 if(!function_exists("showMessageType")){
     function showMessageType($type) { 

      switch ($type) {
        case 'M':
          $response['class']  = "success";
          $response['status'] = "SMS";
          return $response;
          break;
        
        case 'E':
          $response['class']  = "warning";
          $response['status'] = "Email";
          return $response;
          break;
        case 'W':
          $response['class']  = "info";
          $response['status'] = "Whatsapp";
          return $response;
          break;

        default:
          $response['class']  = "";
          $response['status'] = "";
          return $response;
          break;  
      }
     }

}    
    

if (!function_exists("orderId")) {

    function orderId($id) {
        return 'BG' . str_pad(strrev(date('Y')) . $id, 10, '0', STR_PAD_LEFT);
    }

}

 