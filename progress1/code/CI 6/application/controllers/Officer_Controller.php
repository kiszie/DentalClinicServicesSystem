<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."manage/Officer_manage.php";
class Officer_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
      function _construct(){
		parent ::construct();
		$this->jquery->script(base_url.'js/jquery/jquery.js',TRUE);  
	  }

public function get_db(){ 
		$data2['ID']=$this->session->userdata('officer_id');
		$officer = new Officer_manage();
		$data['user'] = $officer->get_db();
		$this->load->view("o_all_dent", $data,$data2);
	}
	
	public function get_p_db(){
		$officer = new Officer_manage();
		$data['user'] = $officer->get_p_db();
		$this->load->view("o_all_patient", $data);
		}
	/*function test2($patientID){
		$officer = new Officer_manage();
		echo $officer->test2($patientID);
		}*/
	public function p_register(){
		$data3['ID']=$this->session->userdata('officer_id');
		if(strlen($data3['ID'])==0){
			$this->load->view('o_patient_regis');
		}
		else{
			$this->load->view('o_patient_regis', $data3);
			if($this->input->post('submit')){
			$officer = new Officer_manage();
			//$officer->p_register();
			$data = array(
    					'patientID'=> $this->input->post('patientID'),
						'password'=> $this->input->post('password'),
     					'f_name' => $this->input->post('f_name'),
     					'l_name' => $this->input->post('l_name'),
						'age'=>$this->input->post('age'),
						'gender'=>$this->input->post('gender'),
						'treatment'=>$this->input->post('treatment'),
						'address'=>$this->input->post('address'),
						'tel'=>$this->input->post('tel'),
						'email'=>$this->input->post('email'),
						'submit'=>$this->input->post('submit'));
			print_r($data);
			$result = $officer->p_register($data);
			if($result==true){
				$data2['user'] = $officer->get_p_db();
				$this->load->view("o_all_patient", $data2);
				}
			else{
				$this->load->view('o_patient_regis', $data);
				}
			}
		}
	}
	
	public function p_edit($patientID){
		//$data2['ID']=$this->session->userdata('officer_id');
//		if(strlen($data2['ID'])==0){
//			$this->load->view('o_patient_edit');
//		}
//		else{
			//$this->load->model('Offiecer_Model');
			//$data['user']=$this->Offiecer_Model->get_p_DataById($patientID);
			$officer = new Officer_manage();
			$data['user'] = $officer->p_edit($patientID);
			//print_r($data['user']);
			$this->load->view('o_patient_edit',$data);
			//}
	}
	
	public function edit_data(){
		//if($this->input->post('save')){
			$officer = new Officer_manage();
			$data['patientID']=$this->input->post('patientID');
			$data['password']=$this->input->post('password');
			$data['f_name']=$this->input->post('f_name');
			$data['l_name']=$this->input->post('l_name');
			$data['age']=$this->input->post('age');
			$data['gender']=$this->input->post('gender');
			$data['treatment']=$this->input->post('treatment');
			$data['address']=$this->input->post('address');
			$data['tel']=$this->input->post('tel');
			$data['email']=$this->input->post('email');
			$data['submit']=$this->input->post('save');
			$result = $officer->edit_data($data);
			if($result==true){
				$data['user'] = $officer->get_p_db();
				$this->load->view("o_all_patient", $data);
			}
		
	}
	function p_delete($patientID){
		/*$this->load->model('Offiecer_Model');
  		$this->Offiecer_Model->delete($patientID);
		echo $this->Offiecer_Model->get_p_data();*/
		$officer = new Officer_manage();
		$result = $officer->p_delete($patientID);
		if($result==true){
				$data['user'] = $officer->get_p_db();
				$this->load->view("o_all_patient", $data);
			}
	}
		function login(){ 
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		 $this->form_validation->set_rules('officer_id', 'OfficerID', 'strip_tags|trim|required|xss_clean');

   $this->form_validation->set_rules('password', 'Password', 'required');
   
   	if($this->form_validation->run()== false){
		$this->load->view('officer_login');
	}
	else{
		$officerID = $this->input->post('officer_id');
		$password = $this->input->post('password');
		
	//$this->load->model('Offiecer_Model');
	//$result=$this->Offiecer_Model->login($userID,$password);
	$officer = new Officer_manage();
	$result = $officer->login($officerID, $password);
	if($result == true){
		
		redirect(base_url().'index.php/Officer');
	}
	else
	{
		$data['error_message'] ="Invalid userID or password";
		$this->load->view('officer_login',$data);
		
		}
		
		}
	
		
		} 
		
		function logout(){
		
			 $this->session->sess_destroy();
			 
			 redirect(base_url().'index.html');
			 
		}
		
		/*function myCalendar($year=null,$month=null){
			
			echo "My calendar";
			
			if(!$year){
				$year = date('Y');
			}
			if(!$month){
				$month = date('M');
			}
			
			$this->load->model('Offiecer_Model');
			if($day =$this->input->post('day')){
			
			$this->Offiecer_Model->addAppointment(
			"$year-$month-$day",
			$this->input->post('data'));
			}
			$data['calendar']=$this->Offiecer_Model->generate($year,$month);
			$this->load->view('calendar.html',$data);
			
		}*/
		
		function callCalendar(){
			$data['ID']=$this->session->userdata('officer_id');
			if(strlen($data['ID'])==0){
				$this->load->view('o_view_calendar');
				}
			else{
				
				$this->load->view('o_view_calendar',$data);
				}
			
			}
			
			
	public function d_register(){
		$data3['ID']=$this->session->userdata('officer_id');
		if(strlen($data3['ID'])==0){
			$this->load->view('o_dent_regis');
		}
		else{
			$this->load->view('o_dent_regis', $data3);
			if($this->input->post('submit')){
				$officer = new Officer_manage();
				$data = array(
    				'dentistID '=> $this->input->post('dentistID'),
					'password'=> $this->input->post('password'),
     				'f_name' => $this->input->post('f_name'),
     				'l_name' => $this->input->post('l_name'),
					'address'=>$this->input->post('address'),
					'tel'=>$this->input->post('tel'),
					'email'=>$this->input->post('email'),
					'submit'=>$this->input->post('submit'));
				$result = $officer->d_register($data);
				if($result==true){
					$data2['user'] = $officer->get_db();
					$this->load->view("o_all_dent",$data2);
					}
				else{
					$this->load->view('o_dent_regis', $data);
				}
			}
		}
	}
	
	public function d_edit($dentistID){
		$data2['ID']=$this->session->userdata('officer_id');
		if(strlen($data2['ID'])==0){
			$this->load->view('o_dent_edit');
		}
		else{
			//$this->load->model('Offiecer_Model');
			$officer = new Officer_manage();
			$data['user'] = $officer->d_edit($dentistID);
			$this->load->view('o_dent_edit',$data,$data2);
		}
	}
	
	public function d_edit_data(){
		$officer = new Officer_manage();
		$result = $officer->d_edit_data();
		if($result==true){
			$data['user'] = $officer->get_db();
				$this->load->view("o_all_dent", $data);
			}
	}
	
	function d_delete($dentistID){
		$officer = new Officer_manage();
		$result = $officer->d_delete($dentistID);
		if($result==true){
				$data['user'] = $officer->get_db();
				$this->load->view("o_all_dent", $data);
			}
	}
	
	public function view_appointment(){
		$officer = new Officer_manage();
		$data['user'] = $officer->view_appointment();
		$this->load->view("o_all_appointment", $data);
		}
	function test(){
		$officer = new Officer_manage();
		$dentistID = 'D002';
		$aDate = '2014-08-01';
		$startTime = '09:30:00';
		echo $officer->test($dentistID,$aDate,$startTime);
		}
	public function make_appointment(){
		$data3['ID']=$this->session->userdata('officer_id');
		if(strlen($data3['ID'])==0){
			$this->load->view('o_make_appointment');
		}
		else{
		$this->load->view('o_make_appointment',$data3);
		if($this->input->post('submit')){
			$officer = new Officer_manage();
			$data = array(
    			'patientID'=> $this->input->post('patientID'),
				'dentistID'=>$this->input->post('dentistID'),
				'aDate'=> $this->input->post('aDate'),
    			'startTime' => $this->input->post('startTime'),
    			'endTime' => $this->input->post('endTime'),
				'treatment'=>$this->input->post('treatment'),
				'description'=>$this->input->post('description'),
				'submit'=>$this->input->post('submit'));
			$result = $officer->make_appointment($data);
			if($result==true){
				$data['user'] = $officer->view_appointment();
				$this->load->view('o_all_appointment',$data);
				}
			else{
				$this->load->view('o_make_appointment');
				}
		}
		}
	}
	public function app_edit($appointmentID){
		$data2['ID']=$this->session->userdata('officer_id');
		if(strlen($data2['ID'])==0){
			$this->load->view('o_app_edit');
		}
		else{
			$officer = new Officer_manage();
			$data['user'] = $officer->app_edit($appointmentID);
			$this->load->view('o_app_edit',$data,$data2);
			}
	}
	
	public function app_edit_data(){
		$officer = new Officer_manage();
		$result = $officer->app_edit_data();
		if($result==true){
			$data['user']=$officer->view_appointment();
			$this->load->view('o_all_appointment',$data);
			}
	}
	function app_delete($appointmentID){
		$officer = new Officer_manage();
		$result = $officer->app_delete($appointmentID);
		if($result==true){
			$data['user']=$officer->view_appointment();
			$this->load->view('o_all_appointment',$data);
			}
	}
	
	function save_appointment($appointmentID){
		//$this->load->model('Offiecer_Model');
		//$data['user']=$this->Offiecer_Model->getAppointmentByAppointmentId($appointmentID);
		$officer = new Officer_manage();
		$data = $officer->save_appointment($appointmentID);
			$this->load->view('o_all_appointment',$data);
		}
		
	public function patientCalendar($patientID){
		$officer = new Officer_manage();
		$data['user'] = $officer->patientCalendar($patientID);
		$this->load->view("patient_own_schedule", $data);
		}
	
	public function dentistCalendar($dentistID){
		$officer = new Officer_manage();
		$data['user'] = $officer->dentistCalendar($dentistID);
		$this->load->view("dentist_own_schedule", $data);
		}
	public function view_p_calendar(){
		$officer = new Officer_manage();
		$data['user'] = $officer->get_p_db();
		$this->load->view("view_p_calendar", $data);
		}
	public function view_d_calendar(){
		$officer = new Officer_manage();
		$data['user'] = $officer->get_db();
		$this->load->view("view_d_calendar", $data);
		}
	}
	
	