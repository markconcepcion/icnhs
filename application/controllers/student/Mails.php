<?php
class Mails extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_mails()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/mails/view_mail');
	     $this->load->view('templates/footer');
	    
  	}
  	function compose_mail()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/mails/compose_mail');
	     $this->load->view('templates/footer');
	    
  	}
  	function mail()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/mails/mail');
	     $this->load->view('templates/footer');
	    
  	}
}
