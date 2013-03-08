<?php

class HGW_Loader extends CI_Loader
{
   function __construct()
   {
	  parent::__construct();
	   
	  $this->_ci_view_paths = array('templates/'  => TRUE, APPPATH);
	   
      $this->_ci_ob_level  = ob_get_level();
      $this->_ci_library_paths = array(APPPATH, BASEPATH);
      $this->_ci_helper_paths = array(APPPATH, BASEPATH);
      $this->_ci_model_paths = array(APPPATH);
     // log_message('debug', "Loader Class Initialized");
   }
}

?>