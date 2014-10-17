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
				print_r($data);
		$check = $this->Offiecer_Model->checkDuplicate_d($dentistID);
		print_r($check);
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
		
	public function get_treatment(){
		$this->load->database();
	 	$this->load->model('Offiecer_Model');
  		return $this->Offiecer_Model->get_treatment();
		}
	public function add_dental_treatment($data){
		$this->load->model('Offiecer_Model');
				
		$tid = $data['tid'];
				print_r($data);
		$check = $this->Offiecer_Model->checkDuplicate_dental($tid);
		print_r($check);
		if($check==true){
			
			$result = $this->Offiecer_Model->addnew_dental($data);
			return $result;
			}
		else{
			return false;
			}
		}
	public function edit_dental_treatment($tid){
		$this->load->database();
	 	$this->load->model('Offiecer_Model');
  		$data['treatment'] = $this->Offiecer_Model->getTreatmentById($tid);
		return $data['treatment'];
		}
	public function edit_dental_treatment_data($data){
		$this->load->database();
		$this->load->model('Offiecer_Model');
		$result = $this->Offiecer_Model->update_treatment($data);
		return $result;
		}
	public function get_information(){
		$this->load->database();
	 	$this->load->model('Offiecer_Model');
  		return $this->Offiecer_Model->get_information();
		}
	public function add_information($data){
		$this->load->model('Offiecer_Model');
		$result=$this->Offiecer_Model->add_information($data);
		return $result;
		}
	public function edit_info($infoID){
		$this->load->model('Offiecer_Model');
		$result=$this->Offiecer_Model->getInfoByInfoId($infoID);
		return $result;
		}
	public function edit_info_data($data){
		$this->load->model('Offiecer_Model');
		$result=$this->Offiecer_Model->edit_information($data);
		return $result;
		}
	public function delete_info($infoID){
		$this->load->model('Offiecer_Model');
		$result=$this->Offiecer_Model->delete_info($infoID);
		return $result;
		}
	public function p_detail($patientID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->get_p_DataById($patientID);
		return $data['user'];
		}
	public function gen_qr($patientID){
		$this->load->library('ciqrcode');
		//$name=$patientID;
		$params['data'] = $patientID;
		$params['level'] = 'H';
		$params['size'] = 4;
		$params['savename'] = FCPATH.'test.png';
		return $this->ciqrcode->generate($params);
		//print_r($params['data']);
		}
	public function check_time($pid){
		$this->load->helper('date');
		$timestring = "%h:%i:%s";
		$time = time();
		$data['time'] = mdate($timestring, $time);
		$datestring = "%Y-%m-%d";
		$data['date'] = mdate($datestring, $time);
		$data['pid'] = $pid;
		$result = array();
		$data['appointment']=$this->patientCalendar($pid);
		if($data['appointment']!=null){
		foreach ($data['appointment'] as $key => $value) {
			
				if($value->aDate==$data['date']){
					if($value->startTime>=$data['datetime']){
   						$result[] = $value->startTime;
					}
					}
				else{
					return "not today";
					}
				}
		}
		else{
			return "no appointment";
			}
		return $result;
		}
		
	}
?>