<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
		
	 	$this->load->database();
	  $this->load->model('Offiecer_Model');
  echo $this->Offiecer_Model->get_data();
	}
	
	public function get_p_db(){
		
		$this->load->database();
		$this->load->model('Offiecer_Model');
		echo $this->Offiecer_Model->get_p_data();
		
		}
	
	public function p_register(){
		$data['PID']="Welcome". "  ".$this->session->userdata('user_id');
		if(strlen($data['PID'])==9){
			$this->load->view('patient_regis');
		}
		else{
			$this->load->model('Offiecer_Model');
			if($this->input->post('submit')){
				$this->Offiecer_Model->addnew();
				echo $this->Offiecer_Model->get_p_data();
			}
			$this->load->view('patient_regis', $data);
			}
	}
	
	public function p_edit($patientID){
		$data2['PID']="Welcome". "  ".$this->session->userdata('user_id');
		if(strlen($data2['PID'])==9){
			$this->load->view('patient_edit');
		}
		else{
			$this->load->model('Offiecer_Model');
			$data['user']=$this->Offiecer_Model->get_p_DataById($patientID);
			$this->load->view('patient_edit',$data,$data2);
			}
	}
	
	public function edit_data(){
		
		
		$data['password']=$this->input->post('password');
		$data['Firstname']=$this->input->post('Firstname');
		$data['Surname']=$this->input->post('Surname');
		$data['Age']=$this->input->post('Age');
		$data['Gender']=$this->input->post('Gender');
		$data['Treatment']=$this->input->post('Treatment');
		$data['Address']=$this->input->post('Address');
		$data['Tel']=$this->input->post('Tel');
		$data['Email']=$this->input->post('Email');
	
		$this->load->model('Offiecer_Model');
		if($this->input->post('save')){
			
		$this->Offiecer_Model->update($data);
		echo $this->Offiecer_Model->get_p_data();
		
		}
	}
	function p_delete($patientID){
		$this->load->model('Offiecer_Model');
  		$this->Offiecer_Model->delete($patientID);
		echo $this->Offiecer_Model->get_p_data();
	}
		function login(){ 
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		 $this->form_validation->set_rules('user_id', 'UserID', 'strip_tags|trim|required|xss_clean');

   $this->form_validation->set_rules('password', 'Password', 'required');
   
   	if($this->form_validation->run()== false){
		$this->load->view('officer_login');
	}
	else{
		$userID = $this->input->post('user_id');
		$password = $this->input->post('password');
		
	$this->load->model('Offiecer_Model');
	$result=$this->Offiecer_Model->login($userID,$password);
	
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
		
		function myCalendar($year=null,$month=null){
			
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
			
		}
		
		function callCalendar(){
			$data['PID']="Welcome". "  ".$this->session->userdata('user_id');
			if(strlen($data['PID'])==9){
				$this->load->view('view_calendar');
				}
			else{
				
				$this->load->view('view_calendar',$data);
				}
			
			}
			
			
	public function d_register(){
		$data['PID']="Welcome". "  ".$this->session->userdata('user_id');
		if(strlen($data['PID'])==9){
			$this->load->view('dent_regis');
		}
		else{
			$this->load->model('Offiecer_Model');
			if($this->input->post('submit')){
				$this->Offiecer_Model->addnew_d();
				echo $this->Offiecer_Model->get_data();
			}
		$this->load->view('dent_regis', $data);
		}
	}
	
	public function d_edit($userID){
		$data['PID']="Welcome". "  ".$this->session->userdata('user_id');
		if(strlen($data['PID'])==9){
			$this->load->view('dent_edit');
		}
		else{
			$this->load->model('Offiecer_Model');
			$this->load->view('dent_edit',$data);
		}
	}
	
	public function d_edit_data(){
		
		$date['userID ']=$this->input->post('userID');
		$data['Role']=$this->input->post('role');
		$data['password']=$this->input->post('password');
     	$data['f_name']=$this->input->post('f_name');
     	$data['l_name']=$this->input->post('l_name');
		$data['address']=$this->input->post('address');
		$data['telNum']=$this->input->post('telNum');
		$data['email']=$this->input->post('email');
		
	
		$this->load->model('Offiecer_Model');
		if($this->input->post('save')){
			
		$this->Offiecer_Model->d_update($data);
		echo $this->Offiecer_Model->get_data();
		
		}
	}
	
	function d_delete($userID){
		
		
		$this->load->model('Offiecer_Model');
	
  		$this->Offiecer_Model->d_delete($userID);
		echo $this->Offiecer_Model->get_data();
	
	}
	
	public function view_appointment(){
		$this->load->database();
	  	$this->load->model('Offiecer_Model');
  		echo $this->Offiecer_Model->get_appointment();
		}
	
	public function make_appointment(){
		
			$this->load->model('Offiecer_Model');
			if($this->input->post('submit')){
				$this->Offiecer_Model->make_new();
				echo $this->Offiecer_Model->get_appointment();
			}
			$this->load->view('make_appointment');
			
	}
	public function app_edit($appointmentID){
		$data2['PID']=$this->session->userdata('user_id');
		if(strlen($data2['PID'])==0){
			$this->load->view('app_edit');
		}
		else{
			$this->load->model('Offiecer_Model');
			$data['user']=$this->Offiecer_Model->getAppointmentByAppointmentId($appointmentID);
			$this->load->view('app_edit',$data,$data2);
			}
	}
	
	public function app_edit_data(){
		
		
		$data['userID']=$this->input->post('userID');
		$data['aDate']=$this->input->post('aDate');
		$data['startTime']=$this->input->post('startTime');
		$data['endTime']=$this->input->post('endTime');
		$data['treatment']=$this->input->post('treatment');
		$data['description']=$this->input->post('description');
	
		$this->load->model('Offiecer_Model');
		if($this->input->post('save')){
			
		$this->Offiecer_Model->app_update($data);
		echo $this->Offiecer_Model->get_appointment();
		
		}
	}
	function app_delete($appointmentID){
		$this->load->model('Offiecer_Model');
  		$this->Offiecer_Model->app_delete($appointmentID);
		echo $this->Offiecer_Model->get_appointment();
	}
	
	function save_appointment($appointmentID){
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getAppointmentByAppointmentId($appointmentID);
			$this->load->view('all_appointment',$data);
		}
	
	}
	
	