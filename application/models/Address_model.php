<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address_model extends MY_model {
    private $table = 'customer_address_master';
    public function __construct() {
        parent::__construct();
        
    }
    
}