<?php
class Student_model extends CI_Model 
{
    function getStudentProfile( $IDstudent )
    {
        return $this->db->WHERE( 'IDstudent', $IDstudent )
            ->JOIN( 'user', 'user.IDuser=user_IDuser' )
            ->GET( 'student' )->ROW_ARRAY();
    }

    function getStudents()
    {
        return $this->db->get( 'student' )->result_array();
    }

    function getStudentSchedule( $IDstudent )
    {
        $this->db->join( 'class', 'class.IDclass = student_history.class_IDclass' );
        $this->db->join( 'teacher', 'teacher.IDteacher = class.teacher_IDteacher' );
        $this->db->join( 'class_subject', 'class_subject.class_IDclass = class.IDclass' );
        $this->db->join( 'subject', 'subject.IDsubject = class_subject.subject_IDsubject' );
        $this->db->where( 'student_history.student_IDstudent', $IDstudent );
        return $this->db->get( 'student_history' )->result_array();
    }
}
