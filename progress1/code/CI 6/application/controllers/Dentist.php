<?php 
if(!defined('BASEPATH'))
 exit('no direct script access allowed');
 
 class Dentist extends CI_Controller{
 	 public function index(){
		 
		 	//print_r($this->session->all_userdata());
			if($this->session->userdata('dentist_id'))
    {
      $data['ID']=ucfirst($this->session->userdata('dentist_id'));
      $this->load->view('d_index',$data);
    }
    else
    {
      //If no session, redirect to login page
      redirect(base_url().'index.php/Dentist_Controller/login');
	}
			
	 }
 }
 
 