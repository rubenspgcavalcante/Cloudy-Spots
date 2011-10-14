<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Cloudy_Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    /* Set Session
     * 
     **Set the user session
     * 
     * @param array $data user, email and if is logged
     * 
     */
    private function set_session($data){
    	$this->session->set_userdata($data);
        redirect("/editor");    	 
    }
    
    /* Destroy Session
     * 
     **Destroy the user session
     * 
     */    
    private function destroy_session(){
    	$this->session->sess_destroy();
    }
    
    /* Index
     * 
     * Shows up the login page and 
     * 
     */
    public function index(){
        $this->load->library("authentication");
        $email = $this->input->post("email");
        $pass = $this->input->post("password");
        if($this->input->post()==false){
        	$this->_render("login");
        	return true;    
        }
        $user = $this->authentication->check_user(array('email'=>$email), $pass);
        if($user == false){
        	$error = array(
        	           "msg" => "Email or password incorrect",
        	           );
        	$this->_render("login", $error);
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
