<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

		$this->form_validation->set_rules('user_id', 'UserID', 'strip_tags|trim|required|xss_clean');

   		$this->form_validation->set_rules('password', 'Password', 'required');
   
   		if($this->form_validation->run()== false){
			$this->load->view('dentist_login');
		}
		else{
			$userID = $this->input->post('user_id');
			$password = $this->input->post('password');
		
			$this->load->model('Dentist_Model');
			$result=$this->Dentist_Model->login($userID,$password);
	
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
			$data['PID']="Welcome". "  ".$this->session->userdata('patient_id');
			if(strlen($data['PID'])==9){
				$this->load->view('p_view_calendar');
				}
			else{
				
				$this->load->view('p_view_calendar',$data);
				}
			
			}

}

?>