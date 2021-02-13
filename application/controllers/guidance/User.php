<?php
class User extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('guidance/User_model','model');
    }

    /**
     * STANDARD FUNCTIONS: functions that are standards and reusable
     * */ 
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

        $data['active'] = 'guidance_user';

        $this->load->view( 'templates/header' );
        $this->load->view( $view, $data );
        $this->load->view( 'templates/guidance_footer' );
    }

    /**
     * PAGE FUNCTIONS: functions that display views
     * reason for separation: to monitor restrictions 
     * */ 
    function index()
    {
        $data['teachers'] = $this->model->getUsers( 'teacher' );
        $data['parents'] = $this->model->getUsers( 'parent' );

        $this->template( 'guidance/user/index', $data );
    }

    function form( $page )
    {
        $data['students'] = $this->model->getStudents();

        $this->template( 'guidance/user/userform_'.$page, $data );
    }

    function info( $level, $IDuser )
    {
        $data['userinfo'] = $this->model->getUserInfo( $level, $IDuser );
        $info = $data['userinfo'];

        if ( $level == 'parent' ) 
            $data['students'] = $this->model->getUsers( 'student', $info['IDparent'] );

        $this->template( 'guidance/user/userinfo_'.$level, $data );
    }
    
    /**
     * REDIRECT FUNCTIONS: functions that redirect us to page functions
     * */  
    function addUser()
    {
        $this->db->trans_begin();

        $table = ( $this->input->post('user_level') != "parent" )? "teacher":"parent";
          
        $IDuser = $this->model->addUser();
        $this->model->saveUserInfo( $IDuser, $table );

        if ( $this->db->trans_status() === FALSE ) $this->db->trans_rollback();
        else $this->db->trans_commit();

        redirect( 'guidance_user' );
    }

    function saveUserInfo()
    {
        $this->db->trans_begin();
        
        $level = $this->input->post( 'user_level' ) == 'parent'? 'parent':'teacher';
        $this->model->saveUserInfo( $this->input->post( 'IDuser' ), $level );

        if ( $this->db->trans_status() === FALSE ) $this->db->trans_rollback();
        else $this->db->trans_commit();

        redirect( 'userinfo/' . $level . '/' . $this->input->post( 'IDuser' ) );
    }

    
    function AddParentStudent()
    {
        $data['status'] = $this->input->post('status');
        $data['success'] = false;
        
        if( $data['status'] == 1 )
            $data['success'] = $this->model->assignParent();
        else {
            $record = $this->model->getIDStudent();
            if ( !empty( $record ) ) {
                $data['status'] = 1;
                if ( !$record['parent_IDparent'] )
                    $data['success'] = $this->model->assignParent();
            }
        }
        
        echo json_encode( $data );
    }
}
