<?php
require_once APPPATH."manage/Patient_manage.php";
class TestPatient_manage extends CI_Controller
{
	public function testp_login()
	{
		$this->load->library("unit_test");
		$patient = new Patient_manage();
		
		$in_user_f = "xxxxxx";
		$in_pass_f = "xxxxxx";
		$expResult1 = false;
		
		$actResult1 = $patient->login($in_user_f, $in_pass_f);
		echo $this->unit->run($expResult1, $actResult1, "test login -> both incorrect");
		
		$in_user_t = "P001";
		$in_pass_t = "1234";
		$expResult2 = true;
		
		$actResult2 = $patient->login($in_user_t, $in_pass_t);
		echo $this->unit->run($expResult2, $actResult2, "test login -> both correct");
		
		$actResult3 = $patient->login($in_user_t,$in_pass_f);
		echo $this->unit->run($expResult1, $actResult3, "test login -> correct username, incorrect password");
		
		$actResult4 = $patient->login($in_user_f,$in_pass_t);
		echo $this->unit->run($expResult1, $actResult4, "test login -> incorrect username, correct password");
	}
	
	public function testp_ownCalendar(){
		
		$this->load->library("unit_test");
		$patient = new Patient_manage();
		
		$in_id_f = "xxxx";
		$expResult1 = null; 
		$actResult1 = $patient->getCalendarByPID($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test view thier own schedule -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1);
		
		$in_id_t = "P001";
		//$expResult2 = true;
		//$expResult2 = array('1','1','test','2014-06-08','13:00:00','13:30:00','Bridge','-');
		//Array ( [dbrow] => Array ( [0] => stdClass Object ( [appointmentID] => 1 [patientID] => 1 [userID] => test [aDate] => 2014-06-08 [startTime] => 13:00:00 [endTime] => 13:30:00 [treatment] => Bridge [description] => - ) ) )
		
		$x2 = $this->load->model('Patient_Model');
		$x2->appointmentID = 1;
		$x2->patientID = 'P001';
		$x2->dentistID = 'D001';
		$x2->aDate = '2014-08-01';
		$x2->startTime = '09:00:00';
		$x2->endTime = '09:30:00';
		$x2->treatment = 'Tooth braces';
		$x2->description = '100 baht';
		$x2->submit = 'Submit';
		//$expResult2[0] = array("appointmentID"=>1,"patientID"=>'1',"userID"=>'test',"aDate"=>'2014-06-08',"startTime"=>'13:00:00',"endTime"=>'13:30:00',"treatment"=>'Bridge',"description"=>'-');
		$expResult2[0] = $x2; 
		$actResult2 = $patient->getCalendarByPID($in_id_t);
		
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		echo $this->unit->run($expResult2, $actResult2, "test view thier own schedule -> true case");
		
		}
}
?>