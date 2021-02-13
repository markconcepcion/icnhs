<?php
class Student_account extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_account()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/student_profile/my_profile');
	    
  	}
  	function student_mail()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/student_mail');
	    $this->load->view('templates/footer');
	    
  	}
  	function my_grade()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/my_grade');
	    $this->load->view('templates/footer');
	    
  	}
  	function view_reportcard()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/view_reportcard');
	    $this->load->view('templates/footer');
	    
  	}
}
