<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competition {

	var $hgwmedia;
	var $table;
	var $error;
	var $status;
	var $userdata;
	
	function __construct()
    {
		$this->hgwmedia =& get_instance();
		$this->hgwmedia->load->database();
    }

	public function savetodb($data){
			//saving to database
			$this->hgwmedia->db->insert('internship',$data);
	}
	
	public function applicants(){
		return $this->hgwmedia->db->get('internship');
	}
	
	public function getallrecords(){
		return $this->hgwmedia->db->count_all('internship');
		//$query = $this->db->get_where('internship');
	}
}

/* End of file Someclass.php */