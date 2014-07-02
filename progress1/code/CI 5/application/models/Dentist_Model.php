<?php 

class Dentist_Model extends CI_Model{
	
	function get_d_data(){
		$this->load->database();
		$query = $this->db->get("clinic_user");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} 
		else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		$this->load->view("all_patient", $output);
	}
	
	function getDataById($userID){
		
		$query = $this->db->get_where('clinic_user',array('userID'=>$userID));
		return $query->row_array();
	}
	
	function login($userID, $password)
	 {
	 $query = $this->db->get_where('clinic_user',array ('userID'=>$userID));
	 if($query->num_rows()>0){
		 $query =$query->row_Array();
		 $user_id=$query['userID'];
		 $password_user=$query['password'];
		 
		 if($userID==$user_id){
			 $IDdata= array('user_id'=>$user_id);
			 $this->session->set_userdata($IDdata);
			 
			 $password= $password;
			 
			 if($password != $password_user){
				 return false;
			 }
			 else{
				$IDdata= array('user_id'=>$user_id); 
				$this->session->set_userdata($IDdata);
			 return true;
		 }
		 }
		 else{
			 false;
		 }
	 }
	 }

	  
	   

}

?>