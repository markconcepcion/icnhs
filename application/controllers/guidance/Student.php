<?php
class Student extends CI_Controller
{
    /**
     * STANDARD FUNCTIONS: functions that are standards and reusable
     * */ 
    function __construct(){
        parent::__construct();
		$this->load->model('guidance/Student_model','model');
    }
    
    function checkSession()
    {
        if( !$this->session->userdata( 'logged_in' ) )
            redirect( 'login' );

        if ( $this->session->userdata( 'level' ) != 'guidance' )
            redirect( 'standard/unauthorized' );
    }

    function template( $view, $data=false )
    {
        $this->checkSession();

        $data['active'] = 'guidance_student';

        $this->load->view( 'templates/header' );
        $this->load->view( $view, $data );
        $this->load->view( 'templates/guidance_footer' );
    }

    function index()
    {
        $data['students'] = $this->model->getStudents();
        $this->template( 'guidance/selectyrtoview', $data );
    }
    
    function profile( $IDstudent )
    {
        $data['prof'] = $this->model->getStudentProfile( $IDstudent );
        $this->template( 'guidance/student/profile', $data );
    }

    function Schedulelist( $IDstudent )
    {
        $data['schedules'] = $this->model->getStudentSchedule( $IDstudent );
        $this->template( 'guidance/student/schedulelist', $data );
    }

}
