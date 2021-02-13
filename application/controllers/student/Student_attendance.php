<?php
class Student_attendance extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_attendance()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/view_attendance');
	    $this->load->view('templates/footer');
  	}
}
