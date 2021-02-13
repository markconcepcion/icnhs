<?php
class Adviser extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

 function student_list()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/as_adviser/my_student');
    $this->load->view('templates/footer');
  }
  function add_attendance()
  {
  	$this->load->view('templates/header');
    $this->load->view('teachers/as_adviser/add_attendance');
    $this->load->view('templates/footer');
  }
  function view_attendance()
  {
  	$this->load->view('templates/header');
    $this->load->view('teachers/as_adviser/view_attendance');
    $this->load->view('templates/footer');
  }

}
