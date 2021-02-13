<?php
class Standard_model extends CI_Model 
{
    function setLogAction( $params )
    {
        $params['user_IDuser'] = $this->session->userdata('id');
        $this->db->insert( 'logs', $params );
    }
}
