<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public $user = "";
    
    public function __construct() {

        parent::__construct();

        // Load facebook library and pass associative array which contains appId and secret key
        $this->load->library('facebook', array('appId' => '1084268411619966', 'secret' => '5dfda93cd3e8bc417e9966419ae8b859'));

        // Get user's login information
        $this->user = $this->facebook->getUser();

        $this->load->model('UserModel');

    }
    
    public function index() {

        $this->load->view('common/header');

        if ($this->user) {
            $data['user_profile'] = $this->facebook->api('/me/?fields=id,name,email,location');

            // Get logout url of facebook
            $data['logout_url'] = $this->facebook->getLogoutUrl(array('next' => base_url() . 'index.php/oauth_login/logout'));

            $this->UserModel->addUser($data['user_profile']);

            // Send data to profile page
            $this->load->view('home', $data);
        } else {
            // Store users facebook login url
            $data['login_url'] = $this->facebook->getLoginUrl(array('scope' => 'email, user_location'));
            $this->load->view('login', $data);
        }


        
        //$this->load->view('login');
        $this->load->view('common/footer');

    }

    public function logout() {

        // Destroy session
        session_destroy();

        // Redirect to baseurl
        redirect('login');
    }


}
