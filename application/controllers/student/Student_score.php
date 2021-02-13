<?php
class Student_score extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_score()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/view_score');
	    $this->load->view('templates/footer');
  	}
  	function my_score()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/my_score');
	    $this->load->view('templates/footer');
  	}
}
