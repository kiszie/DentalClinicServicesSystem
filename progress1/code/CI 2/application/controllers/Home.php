<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to call PHP's session object to access it through CI

class Home extends CI_Controller {

 

 function __construct()

 {

   parent::__construct();

 }


function index(){
	 if($this->session->userdata('logged_in'))
		{
		$session_data = $this->session->userdata('logged_in');
		$data['patientID'] = $session_data['patientID'];
		$this->load->view('Home_view', $data);

   }

   else

   {

     //If no session, redirect to login page
		redirect('Home', 'refresh');

   }
}
}



		
		

	   
