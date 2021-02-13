<?php
class Parent_account extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function view_account()
	{
	    $this->load->view('templates/parent_header');
	    $this->load->view('parent/parent_profile/my_profile');
	 }
}
