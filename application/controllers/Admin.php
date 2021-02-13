<?php
class Admin extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login/index');
    }
  }

   function index()
    {
      if($this->session->userdata('level')==='guidance'){ 
        $this->load->view('templates/header');
        $this->load->view('home');
        $this->load->view('templates/footer');   
      }else{
        echo "Access Denied";
      }
    }
    function registrar()
    {
        if($this->session->userdata('level')==='registrar'){ 

            $this->load->view('templates/header');
            $this->load->view('home');
            $this->load->view('templates/footer');   
        }else{
          echo "Access Denied";
        }
    }
     function student()
    {
        if($this->session->userdata('level')==='student'){ 

            $this->load->view('templates/header');
            $this->load->view('student_dashboard');
            $this->load->view('templates/footer');   
        }else{
          echo "Access Denied";
        }
    }
     function teacher()
    {
        if($this->session->userdata('level')==='teacher'){ 

            $this->load->view('templates/header');
            $this->load->view('teacher_dashboard');
            $this->load->view('templates/footer');   
        }else{
          echo "Access Denied";
        }
    }
     function parent()
    {
        if($this->session->userdata('level')==='parent'){ 

            $this->load->view('templates/header');
            $this->load->view('home');
            $this->load->view('templates/footer');   
        }else{
          echo "Access Denied";
        }
    }

}
