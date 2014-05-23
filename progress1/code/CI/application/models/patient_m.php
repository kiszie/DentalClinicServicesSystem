<?php
class patient_m extends CI_Model { 
	   function get_data(){
	    $this->load->database();
$query = $this->db->get("patient");
if ( $query->num_rows() > 0 ) {
$output['dbrow'] = $query->result();
} else {
$output['dbrow'] = null;
}
$query->free_result();
$this->load->view("patient_message", $output);// ส่งค่า $output['dbrow'] ออกไปทางตัวแปร $output รวดเดียวเลย
	   }
}
	?>