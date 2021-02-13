<?php
class My_class extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function student_name()
	{
	    $this->load->view('templates/parent_header');
	    $this->load->view('parent/my_class/choose_student');
	    $this->load->view('templates/footer');
	 }
}
