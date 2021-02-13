<?php
class Student_reportcard extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_reportcard()
	{
	    $this->load->view('templates/student_header');
	    $this->load->view('student/report_card/view_reportcard');
	    $this->load->view('templates/footer');
  	}
}
