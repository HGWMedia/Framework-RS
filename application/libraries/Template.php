<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

	var $hgwmedia;
	var $error;

	function __construct()
    {
		$this->hgwmedia =& get_instance();
    }
	
	public function get_header(){
		$this->hgwmedia->load->view(Template.DS.'header');
	}
	
	public function get_footer(){
		$this->hgwmedia->load->view(Template.DS.'footer');
	}
	
	public function get_template_part($dir){
		$this->hgwmedia->load->view(Template.DS.$dir);		
	}
	
    public function get()
    {
		
    }
	
    public function set()
    {
		
    }

}

/* End of file Someclass.php */