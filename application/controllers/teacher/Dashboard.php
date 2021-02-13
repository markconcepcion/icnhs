<?php
class Dashboard extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
 

 function view_students()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/dashboard/student_list');
    $this->load->view('templates/footer');
  }
   function Student_profile()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/dashboard/student_profile');
    $this->load->view('templates/footer');
  }

}
