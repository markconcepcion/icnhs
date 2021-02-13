<?php
class Composemail extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

 function view_mail()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/compose_mail/view_mail');
    $this->load->view('templates/footer');
  }
  function compose_mail()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/compose_mail/compose_mail');
    $this->load->view('templates/footer');
  }
  function mail()
  {
    $this->load->view('templates/header');
    $this->load->view('teachers/compose_mail/mail');
    $this->load->view('templates/footer');
  }

}
