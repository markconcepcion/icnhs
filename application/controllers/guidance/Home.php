<?php
class Home extends CI_Controller {
    function __construct() 
    {
        parent::__construct();
		$this->load->model('guidance/Home_model','model');
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

        $data['active'] = 'guidance_home';

        $this->load->view( 'templates/header' );
        $this->load->view( $view, $data );
        $this->load->view( 'templates/guidance_footer' );
    }

    function index()
    {
        if( $this->session->userdata('level')==='guidance' ) { 
            $data['logs'] = $this->model->getActionLogs();
            $data['year'] = $this->model->getSchoolYear();

            $this->template( 'guidance/dashboard/index', $data );
        } else {
            echo "Access Denied";
        }
    }

    function setTimeline()
    {
        $this->session->set_userdata( 'sy', $this->input->post('sy') );
        $this->session->set_userdata( 'sem', $this->input->post('sem') );
        echo json_encode( true );
    }
}
