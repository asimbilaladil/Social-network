<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class PostModel extends CI_Model {

    
    function __construct() {
        parent::__construct();
    }


    public function getUserID( $email ){

        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('user_email', $email);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        return $result;

    } 


    public function insert( $data ){

        if ($this->db->insert('post', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    } 

    public function getUserPost( $id ){

        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('user_id', $id);
        $quary_result=$this->db->get();
        $result = $quary_result->result();


        return $result;

    }  

    public function getUserAmount( $id ){


        $query = $this->db->query('SELECT category, SUM(amount) FROM post where user_id ='.$id. ' GROUP BY category');
        $query->result();
        return $query->result();


    }         

    public function update() {

    }
    
}