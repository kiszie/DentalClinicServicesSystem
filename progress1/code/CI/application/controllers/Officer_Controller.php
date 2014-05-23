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

public function myfunction(){ 

	 	$this->load->database();
	  $this->load->model('Offiecer_Model');
  echo $this->Offiecer_Model->get_data();
	}
	
	public function p_register(){
		$this->load->model('Offiecer_Model');
		if($this->input->post('submit'))
		{
		
  	$this->Offiecer_Model->addnew();
	echo $this->Offiecer_Model->get_data();
	
		}
		$this->load->view('patient_regis');
		
	}
	
	public function p_edit($patientID){
		
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getDataById($patientID);
		$this->load->view('patient_edit',$data);
		
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
		echo $this->Offiecer_Model->get_data();
		
		}
	}
	function p_delete($patientID){
		
		
		$this->load->model('Offiecer_Model');
	
  		$this->Offiecer_Model->delete($patientID);
		echo $this->Offiecer_Model->get_data();
	
	}
		function login(){ 
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		 $this->form_validation->set_rules('patient_id', 'PatientID', 'strip_tags|trim|required|xss_clean');

   $this->form_validation->set_rules('password', 'Password', 'required');
   
   	if($this->form_validation->run()== false){
		$this->load->view('officer_login');
	}
	else{
		$patientID = $this->input->post('patient_id');
		$password = $this->input->post('password');
		
	$this->load->model('Offiecer_Model');
	$result=$this->Offiecer_Model->login($patientID,$password);
	
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
			 
			 redirect(base_url().'index.php/Officer_Controller/login');
			 
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
			$this->load->view('c_view.html');
			}
	}