<?php
class Student_class extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function my_class()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/my_class');
	    $this->load->view('templates/footer');
  	}
  	function view_attendance()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/my_class/view_attendance');
	    $this->load->view('templates/footer');
  	}
  		function view_score()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/my_class/view_score');
	    $this->load->view('templates/footer');
  	}
}
