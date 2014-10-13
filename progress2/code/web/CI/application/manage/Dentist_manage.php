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
	public function calculate($dent_treat){
		$result=0;
		foreach($dent_treat['cost'] as &$value){
			$result += $value;
			}
		//echo "value="+$value;
		//print_r("value="+$result);
		return $result;
		}
	public function get_p_db(){
		$this->load->database();
		$this->load->model('Dentist_Model');
		return $this->Dentist_Model->get_p_data();
		}
	public function follow_up($patientID){
	
		print_r($patientID);
		return $patientID;
		}
	public function follow_up_data($data){
		$this->load->model('Dentist_Model');
		$result = $this->Dentist_Model->add_follow_up($data);
		return $result;
		}
	public function getAllTreatment(){
		$this->load->database();
		$this->load->model('Dentist_Model');
		return $this->Dentist_Model->get_treatment();
		}
	public function callAllReply($dentistID){
		$this->load->database();
		$this->load->model('Dentist_Model');
		$data['followup'] = $this->Dentist_Model->getFollowUpReplyByDid($dentistID);
		
		return $data['followup'];
		
		}
	}

?>