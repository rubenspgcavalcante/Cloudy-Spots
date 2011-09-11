<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function __construct(){
        parent::__construct();
    }

    private function set_session($data){
    	$this->session->set_userdata($data);
        redirect("/editor");    	 
    }
    
    private function destroy_session(){
    	$this->session->sess_destroy();
    }
    
    public function index(){
        $this->load->library("authentication");
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        $user = $this->authentication->check_user(array('email'=>$email), $pass);
        if($user == false){
        	$error = array(
        	           "msg" => "Email or password incorrect",
        	           );
        	$this->load->view("login", $error);
        	$this->destroy_session();
        	return false;
        }
        else
        $newdata = array(
                    'user'      => $user,
                   	'email'     => 'rubenspgcavalcante@gmail.com',
                   	'logged_in' => TRUE
               );
        $this->set_session($newdata);
        redirect("/editor"); 
    }
    
    public function exitapp(){
    	$this->destroy_session();
    	redirect("/login"); 
    }



}
