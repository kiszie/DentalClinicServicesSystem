<?php 
if(!defined('BASEPATH'))
 exit('no direct script access allowed');
 
 class Officer extends CI_Controller{
 	 public function index(){
		 
		 	print_r($this->session->all_userdata());
			if($this->session->userdata('patient_id'))
    {
      $data['PID']="Welcome". "  ".ucfirst($this->session->userdata('patient_id'));
      $this->load->view('all_patient',$data);
    }
    else
    {
      //If no session, redirect to login page
      redirect(base_url().'index.php/Officer_Controller/login');
	}
			
	 }
 }
 
 