<?php
class View_reports extends CI_Controller{
	function __construct(){
    	parent::__construct();
 	}
 	function select_yeargrade11()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/view_reports/select_yeargrade11');
	    $this->load->view('templates/footer');
	    
  	}
  	function Grade11_reports()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/view_reports/grade11_reports');
	    $this->load->view('templates/footer');
	    
  	}
  	function view_g11studentsforms()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/view_reports/view_studentsform');
	    $this->load->view('templates/footer');
	    
  	}
  	function grade11_form138()
	{
	  
	    $this->load->view('registrar/view_reports/grade11_form138');
	   
	    
  	}
  	function grade11_form137()
	{
	  
	    $this->load->view('registrar/view_reports/grade11_form137');
	   
	    
  	}
  	function grade12_selectyr()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/grade12/select_yr');
	    $this->load->view('templates/footer');
	    
  	}
  	function grade12_reports()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/grade12/grade12_reports');
	    $this->load->view('templates/footer');
	    
  	}
  	function view_grade12students()
	{
	    $this->load->view('templates/registrar_header');
	    $this->load->view('registrar/grade12/view_studentforms');
	    $this->load->view('templates/footer');
	    
  	}
  	function grade12_form138()
	{
	  
	    $this->load->view('registrar/grade12/grade12_form138');
	   
	    
  	}
  	function grade12_form137()
	{
	  
	    $this->load->view('registrar/grade12/grade12_form137');
	   
	    
  	}
  	function grade12_viewattendance()
	{
	  
	    $this->load->view('registrar/grade12/view_attendance');
	   
	    
  	}
  	function view_sf2()
	{
	  
	    $this->load->view('registrar/view_reports/view_sf2');
	   
	    
  	}

}
