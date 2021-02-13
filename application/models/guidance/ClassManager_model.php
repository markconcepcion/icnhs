<?php
class ClassManager_model extends CI_Model 
{
    function get_strands()
    {
        return $this->db->GET( 'strand' )->RESULT_ARRAY();
    }

    function get_teachers()
    {
        return $this->db->GET( 'teacher' )->RESULT_ARRAY();
    }
    
    function get_subjects()
    {
        return $this->db->GET( 'subject' )->RESULT_ARRAY();
    }

    function get_classes(){
        $this->db->JOIN( 'strand', 'strand.IDstrand = class.strand_IDstrand' );
        $this->db->JOIN( 'teacher', 'teacher.IDteacher = class.teacher_IDteacher' );
        
        if ( $this->session->userdata( 'sy' ) )
            $this->db->WHERE( 'timeline_IDtimeline', $this->session->userdata( 'sy' ) );

        return $this->db->GET( 'class' )->RESULT_ARRAY();
    }

    function save_class( $data )
    {
        if ( $this->input->post( 'IDclass' ) ) {
            $this->db->WHERE( 'IDclass', $this->input->post( 'IDclass' ) );
            $this->db->UPDATE( 'class', $this->input->post() );
            return $this->input->post( 'IDclass' );
        } else {
            $data['timeline_IDtimeline'] = 1; //STATIC PA NI

            $this->db->INSERT( 'class', $data );
            return $this->db->INSERT_ID();
        }
    }

    function save_schedule( $data )
    {
        if ( $this->input->post( 'IDclassSubject' ) ) {
            $this->db->WHERE( 'IDclassSubject', $this->input->post( 'IDclassSubject' ) );
            $this->db->UPDATE( 'class_subject', $this->input->post() );
            return $this->input->post( 'IDclassSubject' );
        } else {
            $this->db->INSERT( 'class_subject', $data );
            return $this->db->INSERT_ID();
        }
    }

    function save_transferee_account()
    {
        $data = array(
            'username' => $this->input->post( 'studentLRN' ),
            'password' => $this->input->post( 'studentLRN' ),
            'user_level' => 'student'
        );

        $this->db->insert( 'user', $data );
        return $this->db->insert_id(); 
    }

    function save_transferee( $data, $IDuser )
    {
        $data['user_IDuser'] = $IDuser;
        $data['birthdate'] = date( 'Y-m-d', strtotime( $data['birthdate'] ) );

        $this->db->insert( 'student', $data );
        return $this->db->insert_id();
    }

    function saveStudent( $args )
    {
        if ( $args['IDstudent'] ) {
            $this->db->where( 'studentLRN', $args['studentLRN'] );
            $this->db->update( 'student', $args );
            return $args['IDstudent'];
        }

        unset( $args['IDstudent'] );
        $this->db->insert( 'student', $args );
        return $this->db->insert_id();
    }

    function saveStudentHistory( $args )
    {
        $this->db->insert( 'student_history', $args );
        return $this->db->insert_id();
    }

    function check_if_lrn_exists()
    {
        return $this->db->WHERE( 'studentLRN', $this->input->post('studentLRN') )->GET( 'student' )->ROW_ARRAY();
    }

    function check_if_lrn_exists_id( $LRN )
    {
        return $this->db->where( 'studentLRN', $LRN )->get( 'student' )->row_array();
    }

    function getStudents( $IDclass )
    {
        return $this->db->join( 'student_history', 'student_history.student_IDstudent = student.IDstudent' )->where( 'class_IDclass', $IDclass )->get( 'student' )->result_array();
    }

    // INCOMPLETE
    // function get_current_timeline( $timelineType ) 
    // {
    //     $this->db->WHERE( 'timelineType', $timelineType );
    // }
}
