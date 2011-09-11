<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication {

    private $CI;
    private $nredirect;
    
    function __construct(){
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->config->load("cloudyspots");
        $this->nredirect = $this->CI->config->item("nredirect");
    }

    /*
    * Check user data.
    * 
    * Verify the user data. 
    *
    * @param array user name or email
    * @param string password password in md5 format
    * @param string token token used in md5 encrypt
    * @return string/bool user name or false
    */
    public function check_user($user, $password){
    
        if( (empty($user['name']) && empty($user['email']) ) || empty($password) )
           return NULL;
        
        $this->CI->config->load("cloudyspots");
        $enc = $this->CI->config->item("ecrytpt");
        $key = $enc["key"];
        $this->CI->load->model("user_model","user");
        $res = $this->CI->user->get_user($user);

        if($res == NULL) return NULL;
        $encrypted = md5($key.md5($password));
        
        if($encrypted == $res->password) return $res->name;
        else return false;
        
    }

    /*
    * Check Logged
    * 
    * Check if there is the user is logged. If not redirect to login page.
    *
    * @return bool
    */
    public function check_logged(){
    	if( $this->CI->session->userdata("email") !=NULL ) return false;
    	$controller = $this->CI->uri->segment(1);
    	if(!in_array($controller, $this->nredirect))
            redirect("login", "refresh");
        else return true;
    }
}
