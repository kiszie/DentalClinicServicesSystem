<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Officer_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
       /*function index(){ 
	 	{
		$this->load->view('pateint_regis');
		}
	 	
		function save(){
            $this->load->model('Officer_Model');        
            if($this->input->post('submit')){
                $this->Officer_Model->process();                
                }
           redirect('Officer_Controller');
            }
        }*/
		
	/*function index()
	{
	$this->load->view('patient_regis');// loading form view
	}

	function p_regis()
	{
	$this->load->model('Officer_Model');
	$this->Officer_Model->p_regis();*/
	//$this->load->view('all_patient');//loading success view
	/*public function register_p(){
		$data = array(
		"result"=>$this->db->get('patient'),);
		
		$this->load->view('all_patient',$data);

}*/

public function myfunction(){ 
	 	 $this->load->database();
	  $this->load->model('Offiecer_Model');
  echo $this->Offiecer_Model->get_data();
	}
	
	public function p_register(){
		$this->load->model('Offiecer_Model');
		if($this->input->post('submit'))
		{
		
  	$this->Offiecer_Model->addnew();
	echo $this->Offiecer_Model->get_data();
	
		}
		$this->load->view('patient_regis');
		
	}
	
	public function p_edit($patientID){
		
		$this->load->model('Offiecer_Model');
		$data['user']=$this->Offiecer_Model->getDataById($patientID);
		$this->load->view('patient_edit',$data);
		
	}
	
	public function edit_data(){
		
		$patientID=$this->input->post('patientID');
		$data['Firstname']=$this->input->post('Firstname');
		$data['Surname']=$this->input->post('Surname');
		$data['Age']=$this->input->post('Age');
		$data['Gender']=$this->input->post('Gender');
		$data['Treatment']=$this->input->post('Treatment');
		$data['Address']=$this->input->post('Address');
		$data['Tel']=$this->input->post('Tel');
		$data['Email']=$this->input->post('Email');
		
		/*$patientID.",".$Firstname.",".$Surname['Surname'].",".$Age['Age'].","			.$Gender['Gender'].",".$Treatment['Treatment'].",".$Address['Address'].",".$Tel['Tel'].",".$Email['Email'];*/

		$this->db->where('patientID',$patientID);
		$this->db->update('patient', $data);
		if($this->input->post('save')){
			
		$this->load->model('Offiecer_Model');
		echo $this->Offiecer_Model->get_data();
		
		}
		
		
	/*function save(){
            $this->load->model('Offiecer_Model');        
            if($this->input->post('submit')){
                $this->Offiecer_Model->addnew();                
                }
	}*/
		
	
	}
	function p_delete(){
		
			$this->load->model('Offiecer_Model');
		if($this->input->post('delete'))
		{
		
  			$this->Offiecer_Model->delete();
		echo $this->Offiecer_Model->get_data();
		}
	}
	
}
	   
