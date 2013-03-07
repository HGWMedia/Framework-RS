<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users {

	var $hgwmedia;
	var $table;
	var $error;
	var $status;
	
	function __construct()
    {
		//echo "test";
		//parent::__construct();
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
	
	public function registration($type, $email, $lname, $fname, $pwd)
	{
		
		$ischeck = $this->emailcheck($email);
		
		if(!$ischeck){
			$encoded_password = $this->hgwmedia->encrypt->encode($pwd);
			switch($type){
				case '':
				
				break;
				case '':
				
				break;
			}
			$data = array(
						  $type  	=> $type, 
						  'title'  	=> $email, 
						  'title'  	=> $lname, 
						  'title'  	=> $fname, 
						  'title'  	=> $pwd
					);
			
			$this->don->db->insert('users',$data);
			//echo "goes here";
		}
		
		
		/*
		$query = $this->don->db->get_where('users', array('email' => $email));
		
		if( $query->num_rows() > 0 )
		{
			$this->last_error = "Email is already in use.";
			return false;
		}
		else
		{	
		
			if( $emailcheck )
			{
				$query = $this->don->db->get_where('users', array('email' => $email));
				if( $query->num_rows() == 1 )
				{
					$this->last_error = "Email already in use.";
					return false;
				}
			}
			
			$encoded_password = $this->don->encrypt->encode($password);
			
			$data = array(
					'title'  	=> $title,
					'company'   => $company,
					'username'  => $email,
					'password'  => $encoded_password,
					'email'		=> $email,
					'fname'		=> $fname,
					'lname'		=> $lname
					);
			
			$this->don->db->insert('users',$data);
			
			return true;
		}
		*/
		
	}
	
	private function emailcheck($email){
		$query = $this->hgwmedia->db->get_where('users', array('email' => $email));
		return ($query->num_rows() == 1 ? true : false);
	}
}

/* End of file Someclass.php */