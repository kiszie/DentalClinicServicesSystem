<?php
function get_db(){ 
		
	 	$this->load->database();
	  $this->load->model('Offiecer_Model');
  echo $this->Offiecer_Model->get_data();
}
  class TestingOfficerController extends CI_Controller {
  
  public function testing()
  {
  $this->load->library('unit_test');
  
  $test= $this->get_db();
  $expected_result= TRUE;
  $test_name="testing get data from database";
  $this->unit->run($test,$expected_result,$test_name);
  
  echo $this->unit->report();
  }
  }