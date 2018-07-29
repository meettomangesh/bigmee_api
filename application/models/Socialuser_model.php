<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialuser_model extends MY_model {
    private $table = 'social_user';
    public function __construct() {
        parent::__construct();
        
    }
    
    public function create_social_user(array $postData) {
        $existUser = $this->get_row_byid($this->table, array('social_unique_id' => $postData['social_unique_id'], 
            'social_type' => $postData['social_type']), array('id'));
        
        if(count($existUser) == 0) {
            if($lastID = $this->insert_data($postData, $this->table)) {
                return $lastID; 
            }
        }
        return $existUser->id;
    }
    
}