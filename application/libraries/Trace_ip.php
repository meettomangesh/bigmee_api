<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trace_ip {
     private $api = "http://ip-api.com/php/";
    
     public function get_location($ip) {
      return @unserialize(file_get_contents($this->api.$ip));
     }
     
}
?>