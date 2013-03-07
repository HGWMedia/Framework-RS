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
	
	public function register(){
		
		$this->load->helper(array('form', 'url'));
		//$this->load->library('user');
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
			echo "Error Found";
			//echo validation_errors();
			//echo $this->load->view('myform');
		}
		else
		{
			//Send Email
			
			//Saving to database
			
			$this->users->registration($type, $email, $lname, $fname, $pwd);
			//$this->load->user->register($type, $email, $lname, $fname, $pwd);
			//echo "successful redirect";
			//$this->load->view('formsuccess');
		}
		
		//$this->output->set_content_type('application/json')->set_output(json_encode(array('foo' => 'bar')));
		//print_r($_POST);
		//$this->load->view(Template.DS.'register');
	}
	
	public function ticket(){
	
	}
	
	public function template_used(){
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */