<?php
class Compose extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function set_schedule()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/compose/set_schedule');
	    $this->load->view('templates/footer');
	    
  	}
  	function view_mail()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/compose/email/view_mail');
	    $this->load->view('templates/footer');
	    
  	}
  	function compose_mail()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/compose/email/compose_mail');
	    $this->load->view('templates/footer');
	    
  	}
  	function mail()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/compose/email/mail');
	    $this->load->view('templates/footer');
	    
  	}
  	
}
