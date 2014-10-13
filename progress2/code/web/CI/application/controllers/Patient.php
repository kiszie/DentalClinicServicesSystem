<?php if(!defined('BASEPATH'))
 exit('no direct script access allowed');

class Patient extends CI_Controller{
	public function index(){
		if($this->session->userdata('patient_id')){
			$data['PID']=$this->session->userdata('patient_id');
			$this->load->view('index.html',$data);
			}
		else{
			redirect(base_url().'indext.php/Patient_Controller/login');
			}
		}
	}
?>