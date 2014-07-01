<?php 
if(!defined('BASEPATH'))
 exit('no direct script access allowed');

	 
 class Officer extends CI_Controller{
 	 public function index(){
		 
		 	//print_r($this->session->all_userdata());
			if($this->session->userdata('user_id'))
    {
      $data['PID']="Welcome". "  ".$this->session->userdata('user_id');
      $this->load->view('o_index',$data);
    }
    else
    {
      //If no session, redirect to login page
      redirect(base_url().'index.php/Officer_Controller/login');
	}
	    echo $data['PID'];
		echo $this->session->userdata('user_id');	
	 }
 }

?>
 
 