<?php
class Offiecer_Model extends CI_Model {
	 
	   function get_data(){
	    $this->load->database();
$query = $this->db->get("patient");
if ( $query->num_rows() > 0 ) {
$output['dbrow'] = $query->result();
} else {
$output['dbrow'] = null;
}
$query->free_result();
$this->load->view("all_patient", $output);
	  
	   }
	     function addnew()
{
	
	$data = array(
    'patientID '=> $this->input->post('patientID'),
     'Firstname' => $this->input->post('Firstname'),
     'Surname' => $this->input->post('Surname'),
	'Age'=>$this->input->post('Age'),
	'Gender'=>$this->input->post('Gender'),
	'Treatment'=>$this->input->post('Treatment'),
	'Address'=>$this->input->post('Address'),
	'Tel'=>$this->input->post('Tel'),
	'Email'=>$this->input->post('Email'));


$this->db->insert('patient', $data);
}
	
	function getDataById($patientID){
		
		 
	$query = $this->db->get_where('patient',array('patientID'=>$patientID));
	return $query->row_array();

	   }
	
	function update($patientID){
		
		
	}

	
	function delete($patientID){
	
  $this->db->where('patientID',$patientID); 
  $this->db->delete('patient');
}
	
	 
	
}
?>

	