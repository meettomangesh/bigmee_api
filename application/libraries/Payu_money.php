<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payu_money {
    
    private $CI ;
    public $merchant_key = "9Y4rJHIG";
    public $salt         = "qXyVDznI72";
    
    public $payu_base_url = "https://secure.payu.in/";
    
    
    public function __construct(){
       $this->CI =& get_instance();
    }
 
 public function get_payu_response() {
    $payuFailure = new stdClass;
    
    $payuFailure->status     = $this->CI->input->post("status");
    $payuFailure->firstname  = $this->CI->input->post("firstname");
    $payuFailure->amount     = $this->CI->input->post("amount");
    $payuFailure->txnid      = $this->CI->input->post("txnid");
    
    $payuFailure->posted_hash= $this->CI->input->post("hash");
    $payuFailure->key        = $this->CI->input->post("key");
    $payuFailure->productinfo= $this->CI->input->post("productinfo");
    $payuFailure->email      = $this->CI->input->post("email");
    $payuFailure->phone      = $this->CI->input->post("phone");
    $payuFailure->salt       = $this->salt;
    
    return $payuFailure;
}

public function rehash_payu_response() {
    
    $payuResponse = $this->get_payu_response();
    
    $retHashSeq = $payuResponse->salt.'|'.$payuResponse->status.'|||||||||||'.$payuResponse->email.'|'.$payuResponse->firstname.'|'.$payuResponse->productinfo.'|'.$payuResponse->amount.'|'.$payuResponse->txnid.'|'.$payuResponse->key;
    return hash("sha512", $retHashSeq);    
} 
 
} 
