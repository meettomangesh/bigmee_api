 <?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
           
      require_once APPPATH . 'third_party/google_api/src/Google//Client.php';

class Google extends Google_Client {
            
    function __construct($params = array()) {
            parent::__construct();
	}
} 

?>