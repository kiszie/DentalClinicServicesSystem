<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."manage/Patient_manage.php";
class Patient_Controller extends CI_Controller{
	
	function _construct(){
		parent ::construct();
		$this->jquery->script(base_url.'js/jquery.js',TRUE);
		}
		
	public function get_p_db(){
		$this->load->database();
		$this->load->model('Patient_Model');
		echo $this->Patient_Model->get_p_data();
		}
	
		function login(){ 
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('patient_id', 'PatientID', 'strip_tags|trim|required|xss_clean');

   $this->form_validation->set_rules('password', 'Password', 'required');
   
   	if($this->form_validation->run()== false){
		$this->load->view('patient_login');
	}
	else{
		$patientID = $this->input->post('patient_id');
		$password = $this->input->post('password');
		
		$patient = new Patient_manage();
		$result = $patient->login($patientID, $password);
	//$this->load->model('Patient_Model');
	//$result=$this->Patient_Model->login($patientID,$password);
	
	if($result == true){
		
		redirect(base_url().'index.php/Patient');
	}
	else
	{
		$data['error_message'] ="Invalid userID or password";
		$this->load->view('patient_login',$data);
		
		}
		
		}
	
		
		}
	function logout(){
		
			 $this->session->sess_destroy();
			 
			 redirect(base_url().'index.html');
			 
		} 
		
		function callCalendar(){
			$data['PID']=$this->session->userdata('patient_id');
			if(strlen($data['PID'])==0){
				$this->load->view('p_view_calendar');
				}
			else{
				
				$this->load->view('p_view_calendar',$data);
				}
			
			
			
			}
	function patientCalendar($patientID){
		$data['PID']=$this->session->userdata('patient_id');
		if(strlen($data['PID'])==0){
			$this->load->view('patient_own_schedule');
			}
		else{
			$patient = new Patient_manage();
			$data2['user']=$patient->getCalendarByPID($patientID);
			//print_r($data);
			//print_r($data2);
			$this->load->view('patient_own_schedule',$data2,$data['PID']);
			//$this->load->model('Patient_Model');
			//$data['user']=$this->Patient_Model->getAppointmentByID($patientID,$data2);
		}
	}
	
	public function view_follow_up(){
		$data['PID']=$this->session->userdata('patient_id');
		$patient = new Patient_manage();
		$data['user'] = $patient->view_follow_up();
		$this->load->view("p_follow_up",$data);
		print_r($data['user']);
		}
	public function answer_follow_up($qid){
		$patient = new Patient_manage();
		$data['user'] = $patient->viewFollowUpByQid($qid);
		//$data['qid'] = $this->input->post('qid');
		$this->load->helper('date');
		$datestring = "%Y-%m-%d %h:%i:%s";
		$time = time();
		$data['datetime'] = mdate($datestring, $time);
		print_r($data['datetime']);
		$this->load->view('p_answer',$data);
		print_r($data);
		}
	public function answer_data(){
		$patient = new Patient_manage();
		$data['qid'] = $this->input->post('qid');
		$data['patientID'] = $this->input->post('patientID');
		$data['dentistID'] = $this->input->post('dentistID');
		$data['question'] = $this->input->post('question');
		$data['aDateTime'] = $this->input->post('aDateTime');
		$data['answer'] = $this->input->post('answer');
		$data['qDateTime'] = $this->input->post('qDateTime');
		$patient->answer_data($data);
		//$this->load->view('p_answer',$data);
		$this->view_follow_up();
	}
	}

?>