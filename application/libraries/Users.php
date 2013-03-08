<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users {

	var $hgwmedia;
	var $table;
	var $error;
	var $status;
	var $userdata;
	
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
	
	public function login($email, $pwd){
		$ischeck = $this->emailcheck($email);	
		if($ischeck){
			return ($this->validate($email, $pwd) == 1 ? true : false);			 
		}else{
			$this->status= 'Not yet registered';
		}
	}
	
	public function registration($type, $email, $lname, $fname, $pwd)
	{
		
		$ischeck = $this->emailcheck($email);
		
		if(!$ischeck){
			$encoded_password = $this->hgwmedia->encrypt->encode($pwd);
			$data = array(
						  'type'  	=> $type, 
						  'email'  	=> $email, 
						  'lname'  	=> $lname, 
						  'fname'  	=> $fname, 
						  'pwd'  	=> $encoded_password
					);
			//saving to database
			$this->hgwmedia->db->insert('users',$data);
			$this->status='Registration Successfully. Please check your email for activation.';
			
			//send to email here
			
		}else{
			$this->status='Email is already registered!';
				
		}
		
	}

	private function validate($email, $pwd){
		$query = $this->hgwmedia->db->get_where('users', array('email' => $email));
		$ret = $query->row();
		$dpwd = $this->hgwmedia->encrypt->decode($ret->pwd);
		
		if($dpwd ==  $pwd){
			$this->userdata = $ret;
			$this->rsSession();
			$this->status='URL redirection';
			return true;
		}else{
			$this->status='Password not match in our database';
				return false;
		}

	}
	
	public function emailcheck($email){
		$query = $this->hgwmedia->db->get_where('users', array('email' => $email));
		return ($query->num_rows() == 1 ? true : false);
	}
	
	private function rsSession(){
		
		$newdata = array(
			   'email'     => $this->userdata->email,
			   'fname'     => $this->userdata->fname,
			   'lname'     => $this->userdata->lname,
			   'logged_in' => TRUE
        );

		$this->hgwmedia->session->set_userdata($newdata);
	}
}

/* End of file Someclass.php */