<?php
require_once APPPATH."manage/Dentist_manage.php";
class TestDentist_manage extends CI_controller{
	
	public function testLogin(){
		
		$this->load->library("unit_test");
		$dentist = new Dentist_manage();
		
		$in_user_f = "xxxx";
		$in_pass_f = "xxxx";
		$expResult1 = false;
		
		$actResult1 = $dentist->login($in_user_f, $in_pass_f);
		echo $this->unit->run($expResult1, $actResult1, "test login -> both incorrect");
		
		$in_user_t = "D001";
		$in_pass_t = "1234";
		$expResult2 = true;
		
		$actResult2 = $dentist->login($in_user_t, $in_pass_t);
		echo $this->unit->run($expResult2, $actResult2, "test login -> both correct");
		
		$actResult3 = $dentist->login($in_user_t,$in_pass_f);
		echo $this->unit->run($expResult1, $actResult3, "test login -> correct username, incorrect password");
		
		$actResult4 = $dentist->login($in_user_f,$in_pass_t);
		echo $this->unit->run($expResult1, $actResult4, "test login -> incorrect username, correct password");
		}
		
	public function testOwnCalendar(){
		
		$this->load->library("unit_test");
		$dentist = new Dentist_manage();
		
		$in_id_f = "xxxx";
		$expResult1 = null;
		
		$actResult1 = $dentist->getCalendarByDID($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test view thier own schedule -> false case");
		
		$in_id_t = "D002";
		$x2 = $this->load->model('Dentist_Model');
		$x2->appointmentID = 5;
		$x2->patientID = 'P002';
		$x2->dentistID = 'D002';
		$x2->aDate = '2014-08-04';
		$x2->startTime = '11:00:00';
		$x2->endTime = '11:30:00';
		$x2->treatment = 'Tooth braces';
		$x2->description = '100 thb';
		$x2->submit = 'Submit';
		//Array ( [0] => stdClass Object ( [appointmentID] => 16 [patientID] => P0004 [userID] => dent001 [aDate] => 2014-07-04 [startTime] => 14:30:00 [endTime] => 15:00:00 [treatment] => aaaa [description] => aaaa ) )
		$expResult2[0] = $x2; 
		$actResult2 = $dentist->getCalendarByDID($in_id_t);
		
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		echo $this->unit->run($expResult2, $actResult2, "test view thier own schedule -> true case");
		}
	
	}
?>