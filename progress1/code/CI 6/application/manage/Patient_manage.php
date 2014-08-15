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
	}
	
	
?>