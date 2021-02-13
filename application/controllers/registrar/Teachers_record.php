<?php
class Teachers_record extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_teachers()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/teachers_record/teachers_record');
	    $this->load->view('templates/footer');
	    
  	}
}
