<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."manage/Dentist_manage.php";
class Dentist_Controller extends CI_Controller{
	
	function _construct(){
		parent ::construct();
		$this->jquery->script(base_url.'js/jquery.js',TRUE);
	}
	public function get_d_db(){
		$this->load->database();
		$this->load->model('Dentist_Model');
		echo $this->Dentist_Model->get_d_data();
	}
	function login(){ 
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dentist_id', 'DentistID', 'strip_tags|trim|required|xss_clean');

   		$this->form_validation->set_rules('password', 'Password', 'required');
   
   		if($this->form_validation->run()== false){
			$this->load->view('dentist_login');
		}
		else{
			$dentistID = $this->input->post('dentist_id');
			$password = $this->input->post('password');
		
			//$this->load->model('Dentist_Model');
			//$result=$this->Dentist_Model->login($userID,$password);
			$dentist = new Dentist_manage();
			$result = $dentist->login($dentistID, $password);
			
			if($result == true){
		
				redirect(base_url().'index.php/Dentist');
			}
			else{
				$data['error_message'] ="Invalid userID or password";
			$this->load->view('dentist_login',$data);
		
			}
		
		}
	
		
		}
		
		function logout(){
		
			 $this->session->sess_destroy();
			 
			 redirect(base_url().'index.html');
			 
		} 
		function callCalendar(){
			$data['ID']=$this->session->userdata('dentist_id');
			if(strlen($data['ID'])==0){
				$this->load->view('d_view_calendar');
				}
			else{
				
				$this->load->view('d_view_calendar',$data);
				}
			
			}
		function dentistCalendar($dentistID){
			$data2['ID']=$this->session->userdata('dentist_id');
			if(strlen($data2['ID'])==0){
				$this->load->view("dentist_own_schedule");
				}
			else{
				$dentist = new Dentist_manage();
				$data['user']=$dentist->getCalendarByDID($dentistID);
				$this->load->view("dentist_own_schedule", $data,$data2);
				//print_r($data2);
				//$this->load->model('Dentist_Model');
				//$data['user']=$this->Dentist_Model->getAppointmentByID($userID,$data2);
			}
		
	}
}

?>