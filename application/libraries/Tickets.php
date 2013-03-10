<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tickets {

	var $hgwmedia;
	var $table;
	var $error;
	var $status;
	var $userdata;
	var $limit;
	
	function __construct()
    {
		$this->hgwmedia =& get_instance();
		$this->hgwmedia->load->database();
    }
	
	public function categories(){
		return $this->hgwmedia->db->get_where('tickets_category',array());
	}
	public function getallrecords(){
		return $this->hgwmedia->db->count_all('tickets_category');
	}
}