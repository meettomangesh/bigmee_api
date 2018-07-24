<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index() {
        parent::render([
            'view' => 'account/login_page'
        ]);
    }
}