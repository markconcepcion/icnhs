<?php
    class Settings extends CI_Controller
    {
        function __construct()
        { 
            parent::__construct();
            $this->load->model('guidance/Settings_model','model');
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
    
            $data['active'] = 'guidance_settings';
    
            $this->load->view( 'templates/header' );
            $this->load->view( $view, $data );
            $this->load->view( 'templates/guidance_footer' );
        }

        function index()
        {
            $data['sub_list'] = $this->model->getList( 'subject' );
            $data['str_list'] = $this->model->getList( 'strand' );
            $data['tml_list'] = $this->model->getList( 'timeline' );

            $this->template( 'guidance/settings/index', $data );
        }

        function saveSubject()
        {
            $this->model->saveSubject();
            redirect( 'guidance/settings' );
        }

        function saveStrand()
        {
            $this->model->saveStrand();
            redirect( 'guidance/settings' );
        }

        function saveTimeline()
        {
            $this->model->saveStrand();
            redirect( 'guidance/settings' );
        }
    }
    