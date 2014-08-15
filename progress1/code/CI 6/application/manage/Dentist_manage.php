<?php

class Dentist_manage extends CI_Controller{
	
	public function login($dentistID, $password){
		$this->load->model('Dentist_Model');
		$result=$this->Dentist_Model->login($dentistID,$password);
		return $result;
		}
	public function getCalendarByDID($dentistID){
		$this->load->model('Dentist_Model');
		$data['user']=$this->Dentist_Model->getAppointmentByID($dentistID);
		return $data['user'];
		}
	}

?>