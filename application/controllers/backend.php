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
		if($this->session->userdata('logged_in') && $this->session->userdata('isadmin')){
			$this->load->view(Template.DS.$folder.$view);	
		}else{
			redirect(base_url().'backend');	
		}
	}
	public function register(){
		$this->load->view(Template.DS.$folder.'register');	
	}
	
	public function internship(){
		$this->load->library('competition');
		
		if($this->session->userdata('logged_in') && $this->session->userdata('isadmin')){
			$page = $this->uri->segment(3);
			if($page != NULL){
				$this->load->library('pagination');

				$this->competition->limit = 2;
				$config['base_url'] = base_url().DS.Template.DS.$this->uri->segment(2).DS.$this->uri->segment(3).'/';
				$config['total_rows'] = $this->competition->getallrecords();
				$config['per_page'] = $this->competition->limit; 
				
				$config['uri_segment'] = $this->uri->segment(4); 
				
				$this->pagination->initialize($config); 
				
				$this->load->view(Template.DS.$this->uri->segment(2).DS.$this->uri->segment(3));	
			}else{
				$this->load->view(Template.DS.$this->uri->segment(2).DS.$this->uri->segment(2));	
			}
		}else{
			
			redirect(base_url().'backend');	
		}
		
	}
	
	
	public function tickets(){
		
		if($this->session->userdata('logged_in') && $this->session->userdata('isadmin')){
			$page = $this->uri->segment(3);
			if($page != NULL){
				$this->load->library('pagination');

				$this->tickets->limit = 2;
				$config['base_url'] = base_url().DS.Template.DS.$this->uri->segment(2).DS.$this->uri->segment(3).'/';
				$config['total_rows'] = $this->tickets->getallrecords();
				$config['per_page'] = $this->tickets->limit; 
				
				$config['uri_segment'] = $this->uri->segment(4); 
				
				$this->pagination->initialize($config); 
				
				//echo $this->uri->segment(3);
				
				$this->checkCategory($this->uri->segment(4));
				
			}else{
				$this->load->view(Template.DS.$this->uri->segment(2).DS.$this->uri->segment(2));	
			}
		}else{
			
			redirect(base_url().'backend');	
		}
		
	}
	
	private function checkCategory($cat){
		//echo "cate her".Template.DS.$this->uri->segment(2).DS.$this->uri->segment(3);
		
		if(is_int($cat)){
			$this->load->view(Template.DS.$this->uri->segment(2).DS.'add-new-item');	
		}else if($cat == "additem"){
			//$this->load->view(Template.DS.$this->uri->segment(2).DS.'add-new-item');
		}else{
			$this->load->view(Template.DS.$this->uri->segment(2).DS.$this->uri->segment(3));	
		}
		//exit;
	}
	
	public function formpost(){
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */