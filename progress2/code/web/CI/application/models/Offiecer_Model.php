<?php
class Offiecer_Model extends CI_Model {
	 
	public function get_data(){
	   	$this->load->database();
		$query = $this->db->get("dentist");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		//print_r($output);
		//$this->load->view("o_all_dent", $output);
		return $output['dbrow'];
	   }
	   
	public function get_p_data(){
		$this->load->database();
		$query = $this->db->get("patient");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		//print_r($output);
		//$this->load->view("o_all_patient", $output);
		return $output['dbrow'];
	   }
	   
	   function checkDuplicate_p($patientID){
		   print_r($patientID);
		 $this->db->where('patientID',$patientID);
		 
   		 $query = $this->db->get('patient');
    	if ($query->num_rows() == 0){
			echo 'true';
        	return true;
    		}
		else {
			echo 'false';
        	return false;
    		}
		
		}
	   
	function addnew($data){
			$this->db->insert('patient', $data);
			return true;
		}
	
	function getDataById($dentistID){
		
		 
	$query = $this->db->get_where('dentist',array('dentistID'=>$dentistID));
	return $query->row_array();

	   }
	 
	 function get_p_DataById($patientID){
		
		 
	$query = $this->db->get_where('patient',array('patientID'=>$patientID));
	//print_r($patientID);
	//print_r($query->row_array());
	return $query->row_array();

	   }
	   
	   function update($data){
		   
		  $patientID=$this->input->post('patientID');
	   
	   $this->db->where('patientID',$patientID);
		$this->db->update('patient', $data);
	   return true;
	   }
	
	

	
	function delete($patientID){
	 
	 $this->db->where('patientID',$patientID);
    $this->db->delete('patient');
	return true;
	
	}
	
	function login($officerID, $password)
	 {
	 $query = $this->db->get_where('officer',array ('officerID'=>$officerID));
	 if($query->num_rows()>0){
		 $query =$query->row_Array();
		 $officer_id=$query['officerID'];
		 $password_user=$query['password'];
		 
		 if($officerID==$officer_id){
			 $IDdata= array('officer_id'=>$officer_id);
			 $this->session->set_userdata($IDdata);
			 
			 $password= $password;
			 
			 if($password != $password_user){
				 return false;
			 }
			 else{
				$IDdata= array('officer_id'=>$officer_id); 
				$this->session->set_userdata($IDdata);
			 return true;
		 }
		 }
		 else{
			 false;
		 }
	 }
	 }
	 
	
	
	 
	  /*function get_calendar_data($year,$month){
		
		$cal_data= array();	
		$query= $this->db->select('date,treatment')->from('calendar')->like('date',"$year-$month",'after')->get();
		 $query = $query->result();
		 
		 foreach($query  as $row){
			 $day = (int)substr($row->date,8,2);
			 $cal_data[$day]= $row->treatment;
			 
		 }
		return $cal_data ;
	 }
	 */
	 
	/* function addAppointment($date,$treatment){
	 
	if($this->db->select('date')->from('calendar')->where('date',$date)->count_all_results()){
		 
		 $this->db->where('date',$date)
		 ->update('calendar',array
		 ('date'=>$date,
		 'treatment'=>$treatment));
	 }
	 
	 else{
		 
	 //$query = $this->db->get_where('calendar',array('date'=>$cal_data['date'])); 
	 
	 if($query->num_rows()>0){
	 echo "Adding exist";
	 }else{
		
		$this->db->insert('calendar',
		array('date'=>$date,
		'treatment'=>$treatment));
	 
	 }
	 
	 }
	 */
	function checkDuplicate_d($dentistID){
		 $this->db->where('dentistID',$dentistID);
   		 $query = $this->db->get('dentist');
    	if ($query->num_rows() == 0){
        	return true;
    		}
		else{
        	return false;
    		}
		}
		
	function addnew_d($data){
		$this->db->insert('dentist', $data);
		return true;
	}

	function d_update($data){
		   
		  $dentistID=$this->input->post('dentistID');
	   
	   $this->db->where('dentistID',$dentistID);
		$this->db->update('dentist', $data);
		return true;
	   
	}
	
	function d_delete($dentistID){
	 
	 $this->db->where('dentistID',$dentistID);
    $this->db->delete('dentist');
	return true;
	}
	
	 function get_appointment(){
	    $this->load->database();
		$query = $this->db->get("appointment");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} 
		else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		//print_r($output);
		//$this->load->view("o_all_appointment", $output);
	  	return $output['dbrow'];
	   }
	   
	   function getAppointmentByAppointmentId($appointmentID){
		
		 
	$query = $this->db->get_where('appointment',array('appointmentID'=>$appointmentID));
	return $query->row_array();

	   }
	function checkDuplicate_app_dent($dentistID){
		 $this->db->where('dentistID',$dentistID);
   		 $query = $this->db->get('appointment');
    	if($query->num_rows() == 0){
			echo 'd_true';
			return true;
			}
		else{
			echo 'd_false';
			return false;
			}
		}
	function checkDuplicate_app_date($aDate){
		 $this->db->where('aDate',$aDate);
   		 $query = $this->db->get('appointment');
    	if($query->num_rows() == 0){
			echo 'date_true';
			return true;
			}
		else{
			echo 'date_false';
			return false;
			}
		}
	function checkDuplicate_app_time($startTime){
		 $this->db->where('startTime',$startTime);
   		 $query = $this->db->get('appointment');
    	if($query->num_rows() == 0){
			echo 't_true';
			return true;
			}
		else{
			echo 't_false';
			return false;
			}
		}
	
	function make_new($data){
		$this->db->insert('appointment', $data);
		return true;
	}
	
	function appointment_update($data){
		   
		 $appointmentID=$this->input->post('appointmentID');
	   
	  	$this->db->where('appointmentID',$appointmentID);
		$this->db->update('appointment', $data);
	   return true;
	   }
	 function app_delete($appointmentID){
	 
	 	$this->db->where('appointmentID',$appointmentID);
    	$this->db->delete('appointment');
		return true;
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
	   
	   function getAppointmentByDID($dentistID){
		$this->load->database();
		$query = $this->db->get_where('appointment',array('dentistID'=>$dentistID));
		if($query->num_rows()>0){
			$output['dbrow'] = $query->result();
			}
		else{
			$output['dbrow'] = null;
			}
		$query->free_result();
		//$this->load->view("dentist_own_schedule", $output);
		return $output['dbrow'];

	   }
	   
	   
	   
	function get_p_calendar(){
	    $this->load->database();
		$query = $this->db->get("patient");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		$this->load->view("view_p_calendar", $output);
	  
	   }
	function get_d_calendar(){
	    $this->load->database();
		$query = $this->db->get("dentist");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		$this->load->view("view_d_calendar", $output);
	  
	   }
	function checkDuplicate_dental($tid){
		   print_r($tid);
		 $this->db->where('tid',$tid);
		 
   		 $query = $this->db->get('treatment');
    	if ($query->num_rows() == 0){
			echo 'true';
        	return true;
    		}
		else {
			echo 'false';
        	return false;
    		}
		
		}
	   
	function addnew_dental($data){
			$this->db->insert('treatment', $data);
			return true;
		}
	function get_treatment(){
	   	$this->load->database();
		$query = $this->db->get("treatment");
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		//print_r($output);
		//$this->load->view("o_all_dent", $output);
		return $output['dbrow'];
	   }
	  public function getTreatmentById($tid){
		$this->load->database();
		$query = $query = $this->db->get_where('treatment',array('tid'=>$tid));
		return $query->row_array();
		  }
	public function update_treatment($data){
		$tid=$this->input->post('tid');
	   	$this->db->where('tid',$tid);
		$this->db->update('treatment', $data);
	   	return true;
		}
	function get_information(){
	   	$this->load->database();
		$query = $this->db->get('information');
		if ( $query->num_rows() > 0 ) {
			$output['dbrow'] = $query->result();
		} else {
			$output['dbrow'] = null;
		}
		$query->free_result();
		//print_r($output);
		//$this->load->view("o_all_dent", $output);
		return $output['dbrow'];
	   }
	public function add_information($data){
		$this->db->insert('information', $data);
		return true;
		}
	public function getInfoByInfoId($infoID){
		$this->load->database();
		$query = $query = $this->db->get_where('information',array('infoID'=>$infoID));
		return $query->row_array();
		}
	public function edit_information($data){
		$infoID=$this->input->post('infoID');
	   
	   $this->db->where('infoID',$infoID);
		$this->db->update('information', $data);
		return true;
		}
	
	public function delete_info($infoID){
		$this->db->where('infoID',$infoID);
   		$this->db->delete('information');
		return true;
	}
}

	