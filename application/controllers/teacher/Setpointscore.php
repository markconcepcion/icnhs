<?php
class Setpointscore extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model( 'teacher/Setpointofscore_model', 'model' );
  }

   public function set_score()
    {
      $data['subjects'] = $this->model->getTeacherSubject();
      
    	//$data['row'] = $this->pos_model->get_pos();
      $this->load->view('templates/header');
      $this->load->view('teachers/set_pointscore/set_score', $data );
      $this->load->view('templates/footer');
    }

    function savePointOfScore()
    {
      $this->model->savePointOfScore();
      redirect( 'teacher/Setpointscore/set_score' );
    }


   /**public function product_data(){
        $data=$this->pos_model->product_list();
        echo json_encode($data);
   }
    public function save(){

        $data=$this->pos_model->save_product();
        echo json_encode($data);
    }
 
   function update(){
        $data=$this->pos_model->update_product();
        echo json_encode($data);
    }
 **/

}
