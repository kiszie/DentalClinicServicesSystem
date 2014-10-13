<?php

class Patient_manage extends CI_Controller{
	
	public function login($patientID, $password){
		$this->load->model('Patient_Model');
		$result=$this->Patient_Model->login($patientID,$password);
		return $result;
		}
	
	public function getCalendarByPID($patientID){
		$this->load->model('Patient_Model');
		$data['user']=$this->Patient_Model->getAppointmentByID($patientID);
		//print_r($data);
		return $data['user'];
		}
	public function get_p_db(){
		$this->load->database();
		$this->load->model('Patient_Model');
		return $this->Patient_Model->get_p_data();
		}
	public function view_follow_up(){
		$this->load->database();
		$this->load->model('Patient_Model');
		return $this->Patient_Model->get_follow_up();
		}
	public function viewFollowUpByQid($qid){
		$this->load->database();
		$this->load->model('Patient_Model');
		$data['user'] = $this->Patient_Model->getFollowUpByQid($qid);
		return $data['user'];
		}
	public function answer_data($data){
		$this->load->database();
		$this->load->model('Patient_Model');
		$result = $this->Patient_Model->save_answer($data);
		return $result;
		}
	}
	
	
?>