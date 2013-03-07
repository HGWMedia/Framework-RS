<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User {

	var $hgwmedia;
	var $table;
	var $error;

	function __construct()
    {
		$this->hgwmedia =& get_instance();
		$this->hgwmedia->load->database();
		$this->hgwmedia->load->library('session');
		$this->hgwmedia->load->library('encrypt');
    }

    public function get()
    {
		
    }
	
    public function set()
    {
		
    }

}

/* End of file Someclass.php */