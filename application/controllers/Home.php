<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function homepage()
	{
		$this->load->view('templates/header');
		$this->load->view('user/sitemap');
	}
	public function add_user()
	{
		$this->load->view('templates/header');
		$this->load->view('user/user_account');
		$this->load->view('templates/footer');
	}
	public function edit_user()
	{
		$this->load->view('templates/header');
		$this->load->view('user/edit_user');
		$this->load->view('templates/footer');
	}
	public function view_user()
	{
		$this->load->view('templates/header');
		$this->load->view('user/view_user');
		$this->load->view('templates/footer');
	}
	public function view_user_id()
	{
		$this->load->view('templates/header');
		$this->load->view('user/view_userbyid');
	}
	public function add_gradelevel()
	{
		$this->load->view('templates/header');
		$this->load->view('gradelevel/add_grade');
		$this->load->view('templates/footer');
	}
	public function view_gradelevel()
	{
		$this->load->view('templates/header');
		$this->load->view('gradelevel/view_gradelevel');
		$this->load->view('templates/footer');
	}
	public function view_gradelevelid()
	{
		$this->load->view('templates/header');
		$this->load->view('gradelevel/view_gradelevelid');
		$this->load->view('templates/footer');
	}
	public function edit_grade()
	{
		$this->load->view('templates/header');
		$this->load->view('gradelevel/edit_grade');
		$this->load->view('templates/footer');
	}
	public function add_student()
	{
		$this->load->view('templates/header');
		$this->load->view('students/add_student');
		/*$this->load->view('templates/footer');*/
	}
	public function class_schedule()
	{
		$this->load->view('templates/header');
		$this->load->view('students/class_schedule');
		$this->load->view('templates/footer');
	}
	public function view_students()
	{
		$this->load->view('templates/header');
		$this->load->view('students/view_students');
		$this->load->view('templates/footer');
	}
	public function edit_student()
	{
		$this->load->view('templates/header');
		$this->load->view('students/edit_student');
/*		$this->load->view('templates/footer');*/
	}
	public function view_studentbyid()
	{
		$this->load->view('templates/header');
		$this->load->view('students/view_studentbyid');
/*		$this->load->view('templates/footer');*/
	}
}
