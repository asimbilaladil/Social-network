<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){

        parent::__construct();
       // error_reporting(0);

        $data = $this->session->userdata('user_profile');

        if( $data != NULL ) {

            $this->load->model('UserModel');
            $this->load->model('PostModel');

        } else {

            redirect('Login/');

        }

    }    
    public function index() {   

        $data['user_profile'] = $this->session->userdata('user_profile');
        $data['logout_url']   = $this->session->userdata('logout_url');
        $email = $data['user_profile']['email'];
        $user_id = $this->PostModel->getUserID( $email );
        $user_id = $user_id->id;

        if($this->input->post()) {
         

            $postData = array (

                'amount' => intval($this->input->post('amount', true)),
                'category' => $this->input->post('category', true),
                'user_id' => intval($user_id),
                'date' => date('d-m-y')
            );

            $this->PostModel->insert( $postData );


        }
        $data['post']  = $this->PostModel->getUserPost( $user_id );
        $data['amount']  = $this->PostModel->getUserAmount( $user_id );
        
        
        $this->load->view('common/header');

        // Send data to profile page
        $this->load->view('home', $data);

        $this->load->view('common/footer');
    }
}
