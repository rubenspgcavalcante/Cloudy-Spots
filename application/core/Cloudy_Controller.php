<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cloudy_Controller extends CI_Controller{
	
	/* Render
	 ** Render the page divided in three parts.
	 * 
	 * @param string $view view's name
	 * @param array $header page's header
	 * @param array $body page's body
	 * @param array $footer page's footer 
	 */
	protected function _render($view, $header=NULL , $body=NULL, $footer=NULL){
		//Loading header
		$this->load->view("templates/header", $header);
		
		//Loading body content
		$this->load->view($view, $body); 
		
		//Loading footer
		$this->load->view("templates/footer", $header);
	}
	
	
}