<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class UserModel extends CI_Model {

    
    function __construct() {
        parent::__construct();
    }

    public function checkIfUserExist($userEmail) {

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email', $userEmail);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        return $result;
    }


    public function addUser($data) {

        $result = $this->checkIfUserExist($data['email']);
        
        if($result) {

            return;

        } else {
            
            $location = ( array_key_exists('location', $data) ? $data['location']['name'] : '' );

            $data = array(
                'facebook_id' => $data['id'],
                'user_email' => $data['email'],
                'name' => $data['name'],
                'location' => $location
            );

            $this->insert($data);

        }
       
    }

    public function insert( $data ){

        if ($this->db->insert('users', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }  

    public function update() {

    }
    
}