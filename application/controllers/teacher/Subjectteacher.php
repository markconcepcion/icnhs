<?php
class Subjectteacher extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  function my_class()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/my_class');
    $this->load->view('templates/footer');
  }
  function mark_attendance()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/mark_attendance');
    $this->load->view('templates/footer');
  }
  function add_score_quarter()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/add_score_quarter');
    $this->load->view('templates/footer');
  }	
  function add_score()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/add_score');
    $this->load->view('templates/footer');
  }	
  function create_score()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/create_score');
    $this->load->view('templates/footer');
  }
   function view_student_attendance()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_student_attendance');
    $this->load->view('templates/footer');
  }		
  function view_attendance()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_attendance');
    $this->load->view('templates/footer');
  }	
  function view_student_score()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_student_score');
    $this->load->view('templates/footer');
  }	
   function view_score()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_score');
    $this->load->view('templates/footer');
  }
   function view_scorebytype()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_scorebytype');
    $this->load->view('templates/footer');
  }
   function view_student_grade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_student_grade');
    $this->load->view('templates/footer');
  }	
  function view_grade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_grade');
    $this->load->view('templates/footer');
  }	
  function view_mystudentgrade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_mystudentgrade');
    $this->load->view('templates/footer');
  }	
  function view_mystudent_semgrade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/Subject_teacher/view_mystudent_semgrade');
      $this->load->view('templates/footer');
  }	
  function view_advisory()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/Subject_teacher/view_advisory');
      $this->load->view('templates/footer');
  }
  function view_advisorystudents()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_advisorystudents');
    $this->load->view('templates/footer');
  }
   function advisory_studentprofile()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/advisory_studentprofile');
    $this->load->view('templates/footer');
  }
    function advisory_classrecord()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/advisory_classrecord');
    $this->load->view('templates/footer');
  }
  function edit_score()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/edit_score');
    $this->load->view('templates/footer');
  }
  function view_reportcard()
  {
    $this->load->view('teachers/subject_teacher/view_reportcard');
  }
   function edit_reportcard()
  {
    $this->load->view('teachers/subject_teacher/edit_reportcard');
  }
   function add_studentfinalgrade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/add_studentfinalgrade');
    $this->load->view('templates/footer');
  }
  function student_finalgrade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/student_finalgrade');
    $this->load->view('templates/footer');
  }
   function edit_studentfinalgrade()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/edit_studentfinalgrade');
    $this->load->view('templates/footer');
  }
   function view_gradeBystudent()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/subject_teacher/view_gradeBystudent');
    $this->load->view('templates/footer');
  }
}
