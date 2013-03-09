<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
define('DS','/');
class Backend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		define('Template','backend');
		
	}
	
	public function index(){
		if($this->session->userdata('logged_in') && $this->session->userdata('isadmin')){
			$this->load->view(Template.DS.'dashboard');	
		}else{
			$this->load->view(Template.DS.'index');		
		}
	
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'backend');
	}
	public function signup(){
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		
		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');
		
		$this->form_validation->set_rules('email', 'Eamil', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			echo 'Status: Error found';
		}else{
			
			if($this->users->login($email, $pwd)){
				$this->output->set_content_type('application/json')->set_output(json_encode(array('url' => 'backend/dashboard', 'error'=>'false')));			
			}else{
				
				echo "Status: ".$this->users->status;
			}
		}
	}
	
	public function dashboard(){
		
		switch($this->uri->segment(3)){
			case 'internship':
				$folder = $this->uri->segment(3).DS;
				$page = $this->uri->segment(4);
				
				if($page != NULL){
					$view = $page;
					 
				}else{
					$view = $this->uri->segment(3);
				}
				
			break;
			default:
				$folder = "";
				$view = 'dashboard';
			break;
		}
		
		//echo Template.DS.$folder.$view;
		
		if($this->session->userdata('logged_in') && $this->session->userdata('isadmin')){
			$this->load->view(Template.DS.$folder.$view);	
		}else{
			redirect(base_url().'backend');	
		}
		
		
	}
	public function internship(){
		$this->load->library('competition');
		
		if($this->session->userdata('logged_in') && $this->session->userdata('isadmin')){
			//echo "goes here".$this->uri->segment(4);
			$page = $this->uri->segment(3);
			
			//echo $page;
			if($page != NULL){
				$this->load->view(Template.DS.$this->uri->segment(2).DS.$this->uri->segment(3));	
			}else{
				$this->load->view(Template.DS.$this->uri->segment(2).DS.$this->uri->segment(2));	
			}
		}else{
			
			redirect(base_url().'backend');	
		}
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */