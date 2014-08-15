<?php 

class Dentist_Model extends CI_Model{
	
	function get_d_data(){
		$this->load->database();
		$query = $this->db->get("dentist");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} 
		else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		print_r($output);
		//$this->load->view("all_patient", $output);
	}
	
	function getDataById($dentistID){
		
		$query = $this->db->get_where('dentist',array('dentistID'=>$dentistID));
		return $query->row_array();
	}
	
	function login($dentistID, $password)
	 {
	 $query = $this->db->get_where('dentist',array ('dentistID'=>$dentistID));
	 if($query->num_rows()>0){
		 $query =$query->row_Array();
		 $dentist_id=$query['dentistID'];
		 $password_user=$query['password'];
		 
		 if($dentistID==$dentist_id){
			 $IDdata= array('dentist_id'=>$dentist_id);
			 $this->session->set_userdata($IDdata);
			 
			 $password= $password;
			 
			 if($password != $password_user){
				 return false;
			 }
			 else{
				$IDdata= array('dentist_id'=>$dentist_id); 
				$this->session->set_userdata($IDdata);
			 return true;
		 }
		 }
		 else{
			 false;
		 }
	 }
	 }

	  function getAppointmentByID($dentistID){
		$this->load->database();
		$query = $this->db->get_where('appointment',array('dentistID'=>$dentistID));
		if($query->num_rows()>0){
			$output['dbrow'] = $query->result();
			}
		else{
			$output['dbrow'] = null;
			}
		$query->free_result();
		//print_r($output);
		//$this->load->view("dentist_own_schedule", $output);
		return $output['dbrow'];
	   }
	   

}

?>