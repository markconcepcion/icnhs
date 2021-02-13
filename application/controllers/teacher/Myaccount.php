<?php
class Myaccount extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
 

 function view_profile()
  {
    $this->load->view('templates/teacher_header');
    $this->load->view('teachers/myaccount/my_profile');
  
  }

}
