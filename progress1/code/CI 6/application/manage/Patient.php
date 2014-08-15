<?php

class Patient_manage extends CI_Controller{
	
	public function login($patientID, $password){
		$this->load->model('Patient_Model');
	$result=$this->Patient_Model->login($patientID,$password);
	return $result;
		}
	}
?>