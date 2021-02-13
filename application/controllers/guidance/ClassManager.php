<?php
    class ClassManager extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
		    $this->load->model('guidance/ClassManager_model','model');
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
    
            $data['active'] = 'guidance_class';
    
            $this->load->view( 'templates/header' );
            $this->load->view( $view, $data );
            $this->load->view( 'templates/guidance_footer' );
        }

        function check_if_lrn_exists()
        {
            $result = $this->model->check_if_lrn_exists();
            
            echo json_encode( $result );

            return null;
        }

        function index( $status=false )
        {
            $data['classes'] = $this->model->get_classes();
            $data['strands'] = $this->model->get_strands();
            $data['teachers'] = $this->model->get_teachers();
            $data['subjects'] = $this->model->get_subjects();

            if ( $status )
                $data['status'] = $status;

            $this->template( 'guidance/ClassManager/index', $data );
        }

        function transferee( $IDclass )
        {
            $this->template( 'guidance/ClassManager/transferee' );
        }

        // SAVE NEW OR EDIT CLASS
        function save_class()
        {
            // DB TRANSACTIONS
            $this->db->trans_begin();

            $data['IDclass'] = $this->model->save_class( $this->input->post() );

            // ROLLBACK - CANCEL ALL TRANSACTIONS IF EVEN ONE TRANSACTIONS FAILED
            if ( $this->db->trans_status() === FALSE ) {
                $this->db->trans_rollback();
                echo $this->session->set_flashdata( 'ErrorMSG', 'Error' );
            }

            // COMMIT TRANSACTIONS IF ALL ARE SUCCESSFULL
            else {
                $this->db->trans_commit();
                echo $this->session->set_flashdata( 'SuccessMSG', 'Success' );
            } 

            redirect( 'guidance_class' );
        }

        // SAVE NEW OR EDIT SCHEDULE
        function save_schedule()
        {
            // DB TRANSACTIONS
            $this->db->trans_begin();

            $data['status'] = $this->model->save_schedule( $this->input->post() );

            // ROLLBACK - CANCEL ALL TRANSACTIONS IF EVEN ONE TRANSACTIONS FAILED
            if ( $this->db->trans_status() === FALSE ) {
                $this->db->trans_rollback();
                echo $this->session->set_flashdata( 'ErrorMSG', 'Error' );
            }

            // COMMIT TRANSACTIONS IF ALL ARE SUCCESSFULL
            else {
                $this->db->trans_commit();
                echo $this->session->set_flashdata( 'SuccessMSG', 'Success' );
            } 

            redirect( 'guidance_class' );
        }

        // SAVE NEW OR EDIT TRANSFEREE
        function save_transferee()
        {
            // DB TRANSACTIONS
            $this->db->trans_begin();

            $data['IDuser'] = $this->model->save_transferee_account();
            $this->model->save_transferee( $this->input->post(), $data['IDuser'] );

            // ROLLBACK - CANCEL ALL TRANSACTIONS IF EVEN ONE TRANSACTIONS FAILED
            if ( $this->db->trans_status() === FALSE ) {
                $this->db->trans_rollback();
                echo $this->session->set_flashdata( 'ErrorMSG', 'Error' );
            }

            // COMMIT TRANSACTIONS IF ALL ARE SUCCESSFULL
            else {
                $this->db->trans_commit();
                echo $this->session->set_flashdata( 'SuccessMSG', 'Success' );
            } 

            redirect( 'guidance_class' );
        }
        
        function schedule()
        {
            $this->template( 'guidance/add_classschedule', $data );
        }

        function classdetails( $IDclass )
        {
            $data['IDclass'] = $IDclass;
            $data['students'] = $this->model->getStudents( $IDclass );
            
            $this->template( 'guidance/ClassManager/classdetails', $data );
        }

        function importstudents()
        {
            require_once APPPATH.'third_party/phpexcel/PHPExcel.php';
            
            if(isset($_FILES['file_import_item'])) {
                $file = $_FILES['file_import_item'];
                $path = $file['tmp_name'];
                $msg = 'No data!';
                $object = PHPExcel_IOFactory::load($path);    
    
                foreach($object->getWorksheetIterator() as $worksheet)
                {
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
                    $duplicated = array();
                    $invalid = array();
                    $msg = '';
    
                    for($row=10; $row<=$highestRow; $row++)
                    {
                        $data['studentLRN'] = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        
                        if ( $data['studentLRN'] != "" ) {

                            $studentRow             = $this->model->check_if_lrn_exists_id( $data['studentLRN'] );
                            $data['IDstudent']      = $studentRow ? $studentRow['IDstudent'] : 0;
                            
                            $data['firstname']      = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                            $data['gender']         = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                            $data['birthdate']      = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                            $data['age_ffj']        = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                            $data['mothertongue']   = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                            $data['religion']       = $worksheet->getCellByColumnAndRow(10, $row)->getValue();

                            $histData['class_IDclass']      = 38; //$this->input->post( 'IDclass' );
                            $histData['student_IDstudent']  = $this->model->saveStudent( $data );

                            $this->model->saveStudentHistory( $histData );
                        }
                    }
                }
            }

            redirect( 'guidance_class' );
        }
    }
    