<?php
class Settings_model extends CI_Model 
{
    function getList( $table )
    {
        return $this->db->GET( $table )->result_array(); 
    }
    
    function saveSubject()
    {
        if ( $_POST['IDsubject'] ) {
            $this->db->where( 'IDsubject', $_POST['IDsubject'] );
            $this->db->update( 'subject', $_POST );
            return $_POST['IDsubject'];
        } else {
            $this->db->insert( 'subject', $_POST );
            return $this->db->insert_id();
        }
    }

    function saveStrand()
    {
        if ( $_POST['IDstrand'] ) {
            $this->db->where( 'IDstrand', $_POST['IDstrand'] );
            $this->db->update( 'strand', $_POST );
            return $_POST['IDstrand'];
        } else {
            $this->db->insert( 'strand', $_POST );
            return $this->db->insert_id();
        }
    }

    function saveTimeline()
    {
        if ( $_POST['IDtimeline'] ) {
            $this->db->where( 'IDtimeline', $_POST['IDtimeline'] );
            $this->db->update( 'timeline', $_POST );
            return $_POST['IDtimeline'];
        } else {
            $this->db->insert( 'timeline', $_POST );
            return $this->db->insert_id();
        }
    }
}
