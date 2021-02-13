<?php
class Home_model extends CI_Model 
{
    function getSchoolYear()
    {
        return $this->db->GET( 'timeline' )->RESULT_ARRAY();
    }

    function getActionLogs()
    {
        $this->db->JOIN( 'user', 'user.IDuser = logs.user_IDuser' );
        $this->db->ORDER_BY( 'dateTime', 'DESC' ); 
        $logs = $this->db->GET( 'logs' )->RESULT_ARRAY();
        
        $data = array();
        foreach ($logs as $l) {
            $temp = $l;
            $temp['name'] = $this->getUserFullname( $l );
            array_push( $data, $temp ); 
        }

        return $data;
    }
    
    function getUserFullname( $l )
    {
        if ( $l['user_level'] != 'student' && $l['user_level'] != 'parent' ) {
            $l['user_level'] = 'teacher';
        }
        
        $this->db->SELECT( "CONCAT( firstname, ' ', lastname ) AS name"  );
        $this->db->WHERE( 'user_IDuser', $l['IDuser'] );
        return $this->db->GET( $l['user_level'] )->ROW()->name;
    }
}
