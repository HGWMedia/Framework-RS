<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('DS','/');

class Internship extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		define('Template','internship');
	}
	
	public function index(){	
		$this->load->view(Template.DS.'index');		
	}
	
	public function join_the_competetion(){
		$this->load->view(Template.DS.$page = $this->uri->segment(2));	
	}
	public function how_it_works(){
		$this->load->view(Template.DS.$page = $this->uri->segment(2));	
	}
	public function what_you_could_win(){
		$this->load->view(Template.DS.$page = $this->uri->segment(2));	
	}
	public function sponsors(){
		$this->load->view(Template.DS.$page = $this->uri->segment(2));	
	}
	
	public function join(){
		$this->load->library('Competition');
		
		$email = $this->input->post('email');
		$fullname = $this->input->post('name');
		$phone = $this->input->post('contact_no');
		$address = $this->input->post('address');

		
		$data = array(
			  'email'  	=> $email, 
			  'fullname'  	=> $fullname, 
			  'phone'  	=> $phone, 
			  'address'  	=> $address
		);

		
		$this->competition->savetodb($data);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */