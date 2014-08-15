<?php

class Officer_manage extends CI_controller{
	
	public function login($officerID, $password){
		$this->load->model('Offiecer_Model');
		$result=$this->Offiecer_Model->login($officerID,$password);
		return $result;
		}
	public function get_p_db(){
		$this->load->database();
		$this->load->model('Offiecer_Model');
		return $this->Offiecer_Model->get_p_data();
		}
	public function get_db(){
		$this->load->database();
	 	$this->load->model('Offiecer_Model');
  		return $this->Offiecer_Model->get_data();
		}
	public function p_register($data){
		//print_r($data);
		$this->load->model('Offiecer_Model');
				
				$patientID = $data['patientID'];
				$check = $this->Offiecer_Model->checkDuplicate_p($patientID);
				//print_r($patientID);
				//print_r($check);
				if($check==true){
					
					$result = $this->Offiecer_Model->addnew($data);
				//print_r($check);
				//print_r($result);
				//print_r($data);
				return $result;
				}
				else {
					return false;
					}
				return false;
		}
		
	/*	public function test2($patientID){
			$this->load->model('Offiecer_Model');
			return $this->Offiecer_Model->checkDuplicate_p($patientID);
			}
		*/
	public function p_edit($patientID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->get_p_DataById($patientID);
		return $data['user'];
		}	
	public function edit_data($data){
		$this->load->model('Offiecer_Model');
		$result = $this->Offiecer_Model->update($data);
		//echo $this->Offiecer_Model->get_p_data();
		return $result;
		}
	public function p_delete($patientID){
		$this->load->model('Offiecer_Model');
  		$result = $this->Offiecer_Model->delete($patientID);
		return $result;
		//echo $this->Offiecer_Model->get_p_data();
		}
	public function d_register($data){
		$this->load->model('Offiecer_Model');	
		$dentistID = $data['dentistID'];
				print_r($dentistID);
		$check = $this->Offiecer_Model->checkDuplicate_d($dentistID);
		if($check==true){
			
			$result = $this->Offiecer_Model->addnew_d($data);
			return $result;
			}
		else{
			return false;
			}
		}
		
	public function d_edit($dentistID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getDataById($dentistID);
		return $data['user'];
		}
	public function d_edit_data(){
		
		$date['dentistID']=$this->input->post('dentistID');
		$data['password']=$this->input->post('password');
     	$data['f_name']=$this->input->post('f_name');
     	$data['l_name']=$this->input->post('l_name');
		$data['address']=$this->input->post('address');
		$data['tel']=$this->input->post('tel');
		$data['email']=$this->input->post('email');
		
	
		$this->load->model('Offiecer_Model');
		$result = $this->Offiecer_Model->d_update($data);
		return $result;
		}
	public function d_delete($dentistID){
		$this->load->model('Offiecer_Model');
  		$result = $this->Offiecer_Model->d_delete($dentistID);
		//echo $this->Offiecer_Model->get_data();
		return $result;
		}
	public function view_appointment(){
		$this->load->database();
	  	$this->load->model('Offiecer_Model');
  		return $this->Offiecer_Model->get_appointment();
		}
	public function test($dentistID,$aDate,$startTime){
			$this->load->model('Offiecer_Model');
			return $this->Offiecer_Model->checkDuplicate_app($dentistID,$aDate,$startTime);
			}
	public function make_appointment($data){
		$this->load->model('Offiecer_Model');
		$dentistID = $data['dentistID'];
		$aDate = $data['aDate'];
    	$startTime = $data['startTime'];	
		
		$check_dent = $this->Offiecer_Model->checkDuplicate_app_dent($dentistID);
		print_r($dentistID);
		if($check_dent==true){
			$result = $this->Offiecer_Model->make_new($data);
			return $result;
		}
		else{
			$check_date = $this->Offiecer_Model->checkDuplicate_app_date($aDate);
			print_r($aDate);
			if($check_date==true){
				$result = $this->Offiecer_Model->make_new($data);
				return $result;
				}
			else{
				$check_time = $this->Offiecer_Model->checkDuplicate_app_time($startTime);
				print_r($startTime);
				if($check_time==true){
					$result = $this->Offiecer_Model->make_new($data);
					return $result;
				}
				else{
					return false;
					}
				return false;
				}
			return false;
			}
		}
	public function app_delete($appointmentID){
		$this->load->model('Offiecer_Model');
  		$result = $this->Offiecer_Model->app_delete($appointmentID);
		//echo $this->Offiecer_Model->get_appointment();
		return $result;
		}
	public function app_edit($appointmentID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getAppointmentByAppointmentId($appointmentID);
		return $data['user'];
		}
	public function app_edit_data(){
		$data['appointmentID']=$this->input->post('appointmentID');
		$data['patientID']=$this->input->post('patientID');
		$data['dentistID']=$this->input->post('dentistID');
		$data['aDate']=$this->input->post('aDate');
		$data['startTime']=$this->input->post('startTime');
		$data['endTime']=$this->input->post('endTime');
		$data['treatment']=$this->input->post('treatment');
		$data['description']=$this->input->post('description');
			
		$this->load->model('Offiecer_Model');
		$result = $this->Offiecer_Model->appointment_update($data);
		return $result;
		}
	public function save_appointment($appointmentID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getAppointmentByAppointmentId($appointmentID);
		return $data;
		}
	public function patientCalendar($patientID){
		$this->load->database();
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getAppointmentByID($patientID);
		return $data['user'];
		}
	public function dentistCalendar($dentistID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getAppointmentByDID($dentistID);
		return $data['user'];
		}
	}
?>