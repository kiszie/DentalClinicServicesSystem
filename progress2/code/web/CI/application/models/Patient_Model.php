<?php 

class Patient_Model extends CI_Model{
	
	function get_p_data(){
		$this->load->database();
		$query = $this->db->get("patient");
		if($query->num_rows()>0){
			$output['dbrow'] = $query->result();
			}
		else{
			$output['dbrow'] = null;
			}
		//$query->free_result();
		//$this->load->view("all_patient", $output);
		return $output['dbrow'];
	}
	function getDataById($patientID){
		
		 
	$query = $this->db->get_where('patient',array('patientID'=>$patientID));
	return $query->row_array();

	   }

	function login($patientID, $password)
	 {
	 $query = $this->db->get_where('patient',array ('patientID'=>$patientID));
	 if($query->num_rows()>0){
		 $query =$query->row_Array();
		 $patient_id=$query['patientID'];
		 $password_user=$query['password'];
		 
		 if($patientID==$patient_id){
			 $IDdata= array('patient_id'=>$patient_id);
			 $this->session->set_userdata($IDdata);
			 
			 $password= $password;
			 
			 if($password != $password_user){
				 return false;
			 }
			 else{
				$IDdata= array('patient_id'=>$patient_id); 
				$this->session->set_userdata($IDdata);
			 return true;
		 }
		 }
		 else{
			 false;
		 }
	 }
	 }
	 
	function getAppointmentByID($patientID){
		$this->load->database();
		$query = $this->db->get_where('appointment',array('patientID'=>$patientID));
		if($query->num_rows()>0){
			$output['dbrow'] = $query->result();
			}
		else{
			$output['dbrow'] = null;
			}
		$query->free_result();
		//print_r($output);
		
		//$this->load->view("patient_own_schedule", $output);
		return $output['dbrow'];
	   }
	
	public function get_follow_up(){
		$this->load->database();
		$query = $this->db->get("followup");
		if($query->num_rows()>0){
			$output['dbrow'] = $query->result();
			}
		else{
			$output['dbrow'] = null;
			}
		return $output['dbrow'];
		}
	public function getFollowUpByQid($qid){
		$this->load->database();
		$query = $query = $this->db->get_where('followup',array('qid'=>$qid));
		return $query->row_array();
		}
	public function save_answer($data){
		   
		$qid=$this->input->post('qid');
	   	$this->db->where('qid',$qid);
		$this->db->update('followup', $data);
	   return true;
	   }
	}

?>