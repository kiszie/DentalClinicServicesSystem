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
	'password'=>md5($this->input->post('password')),
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
	   
	   function update($data){
		   
		  $patientID=$this->input->post('patientID');
	   
	   $this->db->where('patientID',$patientID);
		$this->db->update('patient', $data);
	   
	   }
	
	

	
	function delete($patientID){
	 
	 $this->db->where('patientID',$patientID);
    $this->db->delete('patient');
	
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
			 
			 $password= md5($password);
			 
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
	 
	
	 function generate($year,$month){
		 
		 $pref = array('show_next_prev'=>'TRUE',
							'next_prev_url'=>base_url().'index.php/Officer_Controller/myCalendar');
							
			$pref['template'] = '

   {table_open}<table border="0" cellpadding="0"  cellspacing="0" class="calendar">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr class ="days">{/cal_row_start}
   {cal_cell_start}<td class ="day">{/cal_cell_start}

   {cal_cell_content}
   		<div class="day_num">{day} </div>
   		<div class="content">{content}</div>
   {/cal_cell_content}
   
   {cal_cell_content_today}
  		<div class="day_num highlight">{day} </div>
   		<div class="content">{content}</div>
  	{/cal_cell_content_today}

   {cal_cell_no_content}
   		<div class="day_num">{day} </div>
	{/cal_cell_no_content}
	
   {cal_cell_no_content_today}
   <div class="day_num highlight">{day}</div>				   {/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';
	
	$cal_data=$this->get_calendar_data($year,$month);
	print_r($cal_data); 
	
	$this->load->library('calendar',$pref);
	
	//$this->addAppointment('2014-05-17','my new year 58');
	return $this->calendar->generate($year,$month,$cal_data);
	 
	 }
	 
	  function get_calendar_data($year,$month){
		
		$cal_data= array();	
		$query= $this->db->select('date,treatment')->from('calendar')->like('date',"$year-$month",'after')->get();
		 $query = $query->result();
		 
		 foreach($query  as $row){
			 $day = (int)substr($row->date,8,2);
			 $cal_data[$day]= $row->treatment;
			 
		 }
		return $cal_data ;
	 }
	 
	 function addAppointment($date,$treatment){
	 
	if($this->db->select('date')->from('calendar')->where('date',$date)->count_all_results()){
		 
		 $this->db->where('date',$date)
		 ->update('calendar',array
		 ('date'=>$date,
		 'treatment'=>$treatment));
	 }
	 
	 else{
		 
		 
		 
	 //$query = $this->db->get_where('calendar',array('date'=>$cal_data['date'])); 
	 
	 
	 
	 /*if($query->num_rows()>0){
	 echo "Adding exist";
	 }else{
		*/
		$this->db->insert('calendar',
		array('date'=>$date,
		'treatment'=>$treatment));
	 
	 
	 }
	 
	 
	 
	 }
}

	