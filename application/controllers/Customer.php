<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index() {
        die('Welcome to customer panel.');         
    }
    
    public function test() {
        die('Welcome to customer test panel.');         
    }
    
    public function demo() {
        die('Welcome to customer test panel.');         
    }
}