<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."manage/Dentist_manage.php";
class Dentist_Controller extends CI_Controller{
	
	function _construct(){
		parent ::construct();
		$this->jquery->script(base_url.'js/jquery.js',TRUE);
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
	
	public function get_p_db(){
		$data2['ID']=$this->session->userdata('dentist_id');
		$dentist = new Dentist_manage();
		$data['user'] = $dentist->get_p_db();
		$this->load->view("d_follow_all",$data,$data2);
		}	
		
		
	public function follow_up($patientID){
		$data['ID']=$this->session->userdata('dentist_id');
		$dentist = new Dentist_manage();
		$data['pid']=$dentist->follow_up($patientID);
		$this->load->helper('date');
		$datestring = "%Y-%m-%d %h:%i:%s";
		$time = time();
		$data['datetime'] = mdate($datestring, $time);
		print_r($data['datetime']);
		$this->load->view('d_follow_up',$data);
		print_r($data['ID']);
		//print_r($data2['ID']);
		}
	public function follow_up_data(){
		$data2['ID']=$this->session->userdata('dentist_id');
		if($this->input->post('submit')){
			$dentist = new Dentist_manage();
			$data = array(
				'patientID'=> $this->input->post('patientID'),
				'dentistID'=> $this->input->post('dentistID'),
				'question'=> $this->input->post('question'),
				'qDateTime'=> $this->input->post('qDateTime')
			);
			print_r($data['dentistID']);
			print_r($data['qDateTime']);
			$dentist->follow_up_data($data);
			}
		}
	public function callTreatment(){
		$dentist = new Dentist_manage();
		$data['treatment'] = $dentist->getAllTreatment();
		print_r($data['treatment']);
		$data['result'] = 0;
		$this->load->view('d_cost_est', $data);
		}
	function cost_est(){
		$dentist = new Dentist_manage();
		$dent_treat =array(
					'tid'=>$this->input->post('tid'),
					'tName'=>$this->input->post('tName'),
					'cost'=>$this->input->post('cost')
					);
		print_r($dent_treat);
		$result = $dentist->calculate($dent_treat);
		print_r($result);
		$data['result']=$result;
		$data['treatment'] = $dentist->getAllTreatment();
		$this->load->view('d_cost_est',$data);
		$result = 0;
			
		}
	public function callAllreply(){
		$data['ID']=$this->session->userdata('dentist_id');
		//print_r($data2['ID']);
		$dentist = new Dentist_manage();
		$dentistID = $data['ID'];
		$data['followupreply']=$dentist->callAllReply($dentistID);
		$this->load->view('d_all_reply', $data);
		//print_r($data['followupreply']);
		}
}

?>