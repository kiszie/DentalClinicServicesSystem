<?php
class PatientAppointment_Model extends CI_Model { 
	   function getPatient(){
	    $this->load->database();
$query = $this->db->get("Patient_Appointement");
if ( $query->num_rows() > 0 ) {
$output['dbrow'] = $query->result();
} else {
$output['dbrow'] = null;
}
$query->free_result();
$this->load->view("p_schedule", $output);// ส่งค่า $output['dbrow'] ออกไปทางตัวแปร $output รวดเดียวเลย
	   }
}
	?>