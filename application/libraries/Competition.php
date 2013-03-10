<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Competition {

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

	public function savetodb($data){
			//saving to database
			$this->hgwmedia->db->insert('internship',$data);
	}
	
	public function applicant_details(){
		//echo  $this->hgwmedia->uri->segment(4);
		return $this->hgwmedia->db->get_where('internship',array('id' => $this->hgwmedia->uri->segment(4) ));
	}
	public function applicants(){
		$offset = $this->hgwmedia->uri->segment(4);
		if($offset == NULL){
			//echo 'Null';
			$offset = 0;
		}else{
			$offset = $offset;
		}
		$query = $this->hgwmedia->db->get_where('internship',array(), $this->limit, $offset );
		//echo $this->hgwmedia->db->last_query();
		return $query;

	}
	
	public function getallrecords(){
		return $this->hgwmedia->db->count_all('internship');
		//$query = $this->db->get_where('internship');
	}
}

/* End of file Someclass.php */