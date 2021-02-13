<?php
class Dashboard extends CI_Controller{
  function __construct()
  {
    parent::__construct();
		$this->load->model('guidance/User_model','model');
  }
  
  function view_profile2()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_profile2');
  }
  function edit_profile()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/edit_user');
    $this->load->view('templates/footer');

  }
   function add_studentuser()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/add_studentuser');
    $this->load->view('templates/footer');

  }
  function view_sy()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_sy');
    $this->load->view('templates/footer');
  }
   function add_gradelevel()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/add_gradelevel');
    $this->load->view('templates/footer');

  }
  function view_students()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_students');
    $this->load->view('templates/footer');

  }
  function view_students2()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_students2');
    $this->load->view('templates/footer');

  }
   function print_classschedule()
  {
    $this->load->view('guidance/print_classschedule');

  }
  function import_students()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/import_students');
    $this->load->view('templates/footer');
  }
  function add_student()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/add_student');
  }
   function edit_student()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/edit_student');
  }
  function view_studentprofile()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_studentprofile');

  }
  function view_studentprofile2()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_studentprofile2');

  }
   function view_studentsprof()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_studentsprof');

  }

 function view_studentsprof2()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_studentsprof2');

  }  function view_studentclass()
  {
    $this->load->view('guidance/view_studentclass');

  }
  function view_studentclass2()
  {
    $this->load->view('guidance/view_studentclass2');

  }
  function view_teachers()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_teachers');
    $this->load->view('templates/footer');

  }
  function add_teacher()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/add_teacher');
    $this->load->view('templates/footer');

  }
   function view_teacherprofile()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_teacherprofile');

  }
  function view_mystudents()
  {
    $this->load->view('templates/header');
    $this->load->view('guidance/view_mystudents');
    $this->load->view('templates/footer');

  }

}
