<?php
    class Setpointofscore_model extends CI_Model
    {
        function getTeacherSubject()
        {
            $this->db->join( 'class_subject', 'class_subject.teacher_IDteacher = teacher.IDteacher', 'LEFT' );
            $this->db->join( 'subject', 'subject.IDsubject = class_subject.subject_IDsubject', 'LEFT' );
            return $this->db->get( 'teacher' )->result_array();
        }

        function savePointOfScore()
        {
            $this->db->insert( 'pointofscore', $this->input->post() );
            return $this->db->insert_id();
        }
    }
    