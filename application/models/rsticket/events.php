<?php

class events extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	public function getlist($limit = 5){
		$data = array(0=>"Jlo", 1=> "Justin Bieber", 3=> "Rihana",);
		return $data;
	}
}

?>