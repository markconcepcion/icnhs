<?php
class User_model extends CI_Model {
    function addUser()
    {
        $data = array(
            'username' => $this->input->post('username')
            ,'password' => $this->input->post('password')
            ,'post_image' => $this->input->post('post_image')
            ,'user_level' => $this->input->post('user_level')
        );

        if ( $this->input->post('IDuser') > 0 ) {
            $this->db->update('user', $data );
            return $this->input->post('IDuser');
        } else {
            $this->db->insert('user', $data );
            return $this->db->insert_id();
        }
    }

    function saveUserInfo( $IDuser, $table )
    {
        $data = array(
            'user_IDuser'   => $IDuser
            ,'sitio'        => $this->input->post('sitio')
            ,'barangay'     => $this->input->post('barangay')
            ,'municity'     => $this->input->post('municity')
            ,'province'     => $this->input->post('province')
            ,'firstname'    => $this->input->post('firstname')
            ,'middlename'   => $this->input->post('middlename')
            ,'lastname'     => $this->input->post('lastname')
            ,'gender'       => $this->input->post('gender')
            ,'contactnum'   => $this->input->post('contactnum')
            ,'birthdate'    => $this->input->post('birthdate')
            ,'email'        => $this->input->post('email')
        );

        if ( $table=='parent' ) {
            unset( $data['email'] );
            unset( $data['birthdate'] );
        }

        if ( $this->input->post( 'IDuserInfo' ) ) {
            $this->db->WHERE( 'user_IDuser', $IDuser );
            return $this->db->UPDATE( $table, $data );
        } else
            return $this->db->INSERT( $table, $data );
    }

    function getUserInfo( $level, $IDuser )
    {
        $this->db->WHERE( 'IDuser', $IDuser )
        ->JOIN( $level, "$level.user_IDuser=user.IDuser" );
        return $this->db->get( 'user' )->row_array();
    }

    function getUsers( $level=false, $var=false )
    {   
        if ( $var ) 
            $this->db->WHERE( 'parent_IDparent', $var );

        if ( $level == 'parent' || $level == 'student' ) 
            $this->db->JOIN( $level, $level.'.user_IDuser=user.IDuser AND user_level = "'.$level.'"' );
        else 
            $this->db->JOIN( 'teacher', 'teacher.user_IDuser=user.IDuser AND user_level NOT IN("parent", "student")' );

        return $this->db->GET( 'user' )->RESULT_ARRAY();
    }

    function getStudents()
    {
        return $this->db->GET('student')->RESULT_ARRAY();
    }

    function getIDStudent()
    {
        $this->db->where('studentLRN', $this->input->post('studentLRN'));
        $result = $this->db->get('student')->row_array();

        if ( empty( $result ) ) return false;
        else return $result;
    }

    function assignParent()
    {
        $data = array( 'parent_IDparent' => $this->input->post('IDparent') );
        $this->db->WHERE( 'studentLRN', $this->input->post('studentLRN') );
        return $this->db->UPDATE( 'student', $data );
    }
}
