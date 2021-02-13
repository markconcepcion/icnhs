<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model', 'model');
        $this->load->model('standard/Standard_model', 'standard');
    }

    function index()
    {
        $udata = $this->session->userdata();
        if ( isset( $udata['logged_in'] ) ) 
            switch ( $udata['level'] ) {
                case 'student': redirect('admin/student'); break;
                case 'teacher': redirect('admin/teacher'); break;
                case 'guidance': redirect('guidance_home'); break;
                case 'registrar': redirect('admin/registrar'); break;
                default: redirect('admin/parent'); break;
            }
        else $this->load->view('login');
    }

    function auth(){
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->model->validate($username, $password);
        
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            
            $user_id  = $data['IDuser'];
            $fname  = $data['firstname'];
            $mname  = $data['middlename'];
            $lname  = $data['lastname'];
            $level  = $data['user_level'];
            $contact = $data['contact_no'];
            $username = $data['username'];
            $post_image  = $data['post_image'];
            $created_on  = $data['created_on'];

            $sesdata = array(
                'id' => $user_id,
                'fname'  => $fname,
                'mname'  => $mname,
                'lname'  => $lname,
                'username'  => $username,
                'contact' => $contact,
                'post_image'  => $post_image,
                'created_on'  => $created_on,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);

            $params['description'] = "Logged-in in the system.";
            $this->standard->setLogAction( $params );
        } else
            echo $this->session->set_flashdata('msg','Incorrect username/password');

        redirect('login');
    }

    function logout(){
        $params['description'] = "Logged-out of the system.";
        $this->standard->setLogAction( $params );

        $this->session->sess_destroy();
        redirect('login');
    }
}
