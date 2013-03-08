<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('DS','/');

class Rs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	//var $template;
	
	public function __construct()
	{
		parent::__construct();
		define('Template','rsticket');
		//define('TEMPLATEPATH','/templates');
		//define('viewpath','./templates'.DS.Template.DS);
	}
	
	public function index(){
		
		$this->load->model(Template.DS.'events');
		$data['events'] = $this->events->getlist();
		
		$this->load->view(Template.DS.'index', $data);		
	}
	public function jason()
	{
		$this->output->set_content_type('application/json')->set_output(json_encode(array('status' => 'test')));
		//$this->load->view('welcome_message');
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

				$this->output->set_content_type('application/json')->set_output(json_encode(array('status' => $this->users->status)));
				
				//echo "Status: ".$this->users->status;
			}else{
				
				echo "Status: ".$this->users->status;
			}
		}
	}

	public function forgot(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$email = $this->input->post('email');
		
		$this->form_validation->set_rules('email', 'Eamil', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			echo 'Status: Error found';
		}else{
			
			if($this->users->emailcheck($email)){
				echo "Status: Email sent to ".$email;
			}else{
				echo "Status: Email (".$email.") not Found in database!";
			}
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}
	
	public function register(){
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$email = $this->input->post('email');
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$type = $this->input->post('type');
		$phone = $this->input->post('phone');
		$cpwd = $this->input->post('cpwd');
		$pwd = $this->input->post('pwd');
		
		
		$this->form_validation->set_rules('type', 'Registration Type', 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('pwd', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('cpwd', 'Password', 'required|matches[pwd]');
		$this->form_validation->set_rules('phone', 'Phone', 'required|length[15]');
		
				
		
		if ($this->form_validation->run() == FALSE)
		{
			echo "Status: Error Found";
		}
		else
		{
			$this->users->registration($type, $email, $lname, $fname, $pwd);
			echo "Status: ".$this->users->status;
		}
		
	}
	
	public function ticket(){
	
	}
	
	public function template_used(){
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */