<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor extends Cloudy_Controller {
    
    function __construct(){
        parent::__construct();
        
    }
    public function index(){
    	$this->_render("editor");
    	
    }
}