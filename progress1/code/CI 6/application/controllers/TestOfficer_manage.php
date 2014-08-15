<?php
require_once APPPATH."manage/Officer_manage.php";

class TestOfficer_manage extends CI_controller{
	
	public function testLogin(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_user_f = "xxxx";
		$in_pass_f = "xxxx";
		$expResult1 = false;
		
		$actResult1 = $officer->login($in_user_f, $in_pass_f);
		echo $this->unit->run($expResult1, $actResult1, "test login -> both incorrect");
		
		$in_user_t = "OF001";
		$in_pass_t = "1234";
		$expResult2 = true;
		
		$actResult2 = $officer->login($in_user_t, $in_pass_t);
		echo $this->unit->run($expResult2, $actResult2, "test login -> both correct");
		
		$actResult3 = $officer->login($in_user_t,$in_pass_f);
		echo $this->unit->run($expResult1, $actResult3, "test login -> correct username, incorrect password");
		
		$actResult4 = $officer->login($in_user_f,$in_pass_t);
		echo $this->unit->run($expResult1, $actResult4, "test login -> incorrect username, correct password");
		}
		
	public function testget_p_db(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$x = $this->load->model('Offiecer_Model');
		$x->patientID = 'P001';
		$x->password = '1234';
		$x->f_name = 'Mickey';
		$x->l_name = 'Mouse';
		$x->age = 80;
		$x->gender = 1;
		$x->treatment = 'Tooth braces,tooth zeplin';
		$x->address = 'Chaingmai Thailand';
		$x->tel = '053111111';
		$x->email = 'M.ky@hotmail.com';
		$x->submit = 'Submit';
		$expResult[0] = $x;
		
		$x2 = $this->load->model('Offiecer_Model');
		$x2->patientID = 'P002';
		$x2->password = '1111';
		$x2->f_name = 'Minnie';
		$x2->l_name = 'Mouse';
		$x2->age = 80;
		$x2->gender = 2;
		$x2->treatment = 'Tooth braces,tooth zeplin';
		$x2->address = 'New York,USA';
		$x2->tel = '0120000000';
		$x2->email = 'M.Nie@hotmail.com';
		$x2->submit = 'Submit';
		$expResult[1] = $x2;
		
		$x3 = $this->load->model('Offiecer_Model');
		$x3->patientID = 'P003';
		$x3->password = '5555';
		$x3->f_name = 'Goofy';
		$x3->l_name = 'Goof';
		$x3->age = 4;
		$x3->gender = 1;
		$x3->treatment = 'EF line';
		$x3->address = 'California,USA';
		$x3->tel = '0230000000';
		$x3->email = 'GG@yahoo.com';
		$x3->submit = 'Submit';
		$expResult[2] = $x3;
		
		$actResult = $officer->get_p_db();
		
		echo $this->unit->run($expResult, $actResult, "test view all patient -> true case");
		echo "exp >>> ";print_r($expResult); echo "</br>";
		echo "act >>> ";print_r($actResult);
	}	
		
	public function testget_db(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$x = $this->load->model('Offiecer_Model');
		$x->dentistID = 'D001';
		$x->password = '1234';
		$x->f_name = 'Donald';
		$x->l_name = 'Duck';
		$x->address = 'Chaingmai Thailand';
		$x->email = 'DD@gmail.com';
		$x->tel = '0810000000';
		$x->submit = null;
		$expResult[0] = $x;
		
		$x2 = $this->load->model('Offiecer_Model');
		$x2->dentistID = 'D002';
		$x2->password = '6789';
		$x2->f_name = 'Daisy';
		$x2->l_name = 'Duck';
		$x2->address = 'New York,USA';
		$x2->email = 'D_lady@hotmail.com';
		$x2->tel = '0810000001';
		$x2->submit = 'Submit';
		$expResult[1] = $x2;
		
		$actResult = $officer->get_db();
		
		echo $this->unit->run($expResult, $actResult, "test view all dentist -> true case");
		echo "exp >>> ";print_r($expResult); echo "</br>";
		echo "act >>> ";print_r($actResult);
		}	
		
	public function testp_register(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$data = array(
			'patientID'=>'P004',
			'password'=>'1234',
			'f_name'=>'Mickey',
			'l_name'=>'Mouse',
			'age'=>80,
			'gender'=>1,
			'treatment'=>'Tooth braces,tooth zeplin',
			'address'=>'Chaingmai Thailand',
			'tel'=>'053111111',
			'email'=>'M.ky@hotmail.com',
			'submit'=>'Submit');
		
		echo "data >>> ";print_r($data);
		$expResult1 = true;
		$actResult1 = $officer->p_register($data);
		echo $this->unit->run($expResult1, $actResult1, "test register for patient -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1); echo "</br>";
		
		$data2 = array(
			'patientID'=>'P001',
			'password'=>'1234',
			'f_name'=>'Mickey',
			'l_name'=>'Mouse',
			'age'=>80,
			'gender'=>1,
			'treatment'=>'Tooth braces,tooth zeplin',
			'address'=>'Chaingmai Thailand',
			'tel'=>'053111111',
			'email'=>'M.ky@hotmail.com',
			'submit'=>'Submit');
			
		$expResult2 = false;
		$actResult2 = $officer->p_register($data2);
		echo $this->unit->run($expResult2, $actResult2, "test register for patient -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		
		}
	public function testp_edit(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_f = 'P000';
		$expResult1 = null;	
		
		$actResult1 = $officer->p_edit($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test call patients' data to edit -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1);
		
		$in_id_t = 'P001';
		$expResult2 = array('patientID'=>'P001','password'=>'1234','f_name'=>'Mickey','l_name'=>'Mouse','age'=>80,'gender'=>1,'treatment'=>'Tooth braces,tooth zeplin','address'=>'Chaingmai Thailand','tel'=>'053111111','email'=>'M.ky@hotmail.com','submit'=>'Submit');	
		
		$actResult2 = $officer->p_edit($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test call patients' data to edit -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
	public function testp_delete(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_t = 'P004';
		$expResult2 = true;
		$actResult2 = $officer->p_delete($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test delete patients' account -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
		
	public function testd_register(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$data = array(
			'dentistID'=>'D003',
			'password'=>'1234',
			'f_name'=>'dent',
			'l_name'=>'tist',
			'address'=>'clinic',
			'tel'=>'0000000000',
			'email'=>'dentist.t@clinic.com',
			'submit'=>'Submit');
			
		$expResult = true;
		$actResult = $officer->d_register($data);
		echo $this->unit->run($expResult, $actResult, "test register for dentist -> true case");
		echo "exp >>> ";print_r($expResult); echo "</br>";
		echo "act >>> ";print_r($actResult);
		
		$data2 = array(
			'dentistID'=>'D001',
			'password'=>'1234',
			'f_name'=>'John',
			'l_name'=>'Doe',
			'address'=>'Munich, Germany',
			'tel'=>'0000000000',
			'email'=>'j.doe@clinic.com',
			'submit'=>'Submit');
		
		$expResult2 = false;
		$actResult2 = $officer->d_register($data2);
		echo $this->unit->run($expResult2, $actResult2, "test register for dentist -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
	public function testd_edit(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_f = 'P0000';
		$expResult1 = null;	
		
		$actResult1 = $officer->d_edit($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test call dentists' data to edit -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1);
		
		$in_id_t = 'D002';
		$expResult2 = array('dentistID'=>'D002','password'=>'6789','f_name'=>'Daisy','l_name'=>'Duck','address'=>'New York,USA','email'=>'D_lady@hotmail.com','tel'=>'0810000001','submit'=>'Submit');	
		
		$actResult2 = $officer->d_edit($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test call dentists' data to edit -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
		
	public function testd_delete(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_t = '0';
		$expResult2 = true;
		$actResult2 = $officer->d_delete($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test delete dentists' accout -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
		
	public function testview_appointment(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$x = $this->load->model('Offiecer_Model');
		$x->appointmentID = 1;
		$x->patientID = 'P001';
		$x->dentistID = 'D001';
		$x->aDate = '2014-08-01';
		$x->startTime = '09:00:00';
		$x->endTime = '09:30:00';
		$x->treatment = 'Tooth braces';
		$x->description = '100 baht';
		$x->submit = 'Submit';
		$expResult[0] = $x;
		
		$x2 = $this->load->model('Offiecer_Model');
		$x2->appointmentID = 2;
		$x2->patientID = 'P002';
		$x2->dentistID = 'D002';
		$x2->aDate = '2014-08-05';
		$x2->startTime = '13:00:00';
		$x2->endTime = '14:00:00';
		$x2->treatment = 'Whitening';
		$x2->description = '1000 baht';
		$x2->submit = 'Submit';
		$expResult[1] = $x2;
		
		
		$actResult = $officer->view_appointment();
		
		echo $this->unit->run($expResult, $actResult, "test view all appointment in schedule -> true case");
		echo "exp >>> ";print_r($expResult); echo "</br>";
		echo "act >>> ";print_r($actResult);
		}
		
	public function testmake_appointment(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$data = array(
			'patientID'=>'P003',
			'dentistID'=>'D003',
			'aDate'=>'2014-08-04',
			'startTime'=>'13:00:00',
			'endTime'=>'13:30:00',
			'treatment'=>'Whitening',
			'description'=>'4500 THB',
			'submit'=>'Submit');	
			
		$expResult = true;
		$actResult = $officer->make_appointment($data);
		echo $this->unit->run($expResult, $actResult, "test make appointment -> true case");
		echo "exp >>> ";print_r($expResult); echo "</br>";
		echo "act >>> ";print_r($actResult);
		
		$data2 = array(
			'patientID'=>'P003',
			'dentistID'=>'D001',
			'aDate'=>'2014-08-01',
			'startTime'=>'09:00:00 ',
			'endTime'=>'09:30:00',
			'treatment'=>'Whitening',
			'description'=>'4500 THB',
			'submit'=>'Submit');	
			
		$expResult2 = false;
		$actResult2 = $officer->make_appointment($data2);
		echo $this->unit->run($expResult2, $actResult2, "test make appointment -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		
		$data3 = array(
			'patientID'=>'P003',
			'dentistID'=>'D001',
			'aDate'=>'2014-08-01',
			'startTime'=>'09:30:00 ',
			'endTime'=>'10:00:00',
			'treatment'=>'Whitening',
			'description'=>'4500 THB',
			'submit'=>'Submit');	
			
		$expResult3 = true;
		$actResult3 = $officer->make_appointment($data3);
		echo $this->unit->run($expResult3, $actResult3, "test make appointment -> true case");
		echo "exp >>> ";print_r($expResult3); echo "</br>";
		echo "act >>> ";print_r($actResult3);
		
		$data4 = array(
			'patientID'=>'P003',
			'dentistID'=>'D001',
			'aDate'=>'2014-08-02',
			'startTime'=>'09:30:00 ',
			'endTime'=>'10:00:00',
			'treatment'=>'Whitening',
			'description'=>'4500 THB',
			'submit'=>'Submit');	
			
		$expResult4 = true;
		$actResult4 = $officer->make_appointment($data4);
		echo $this->unit->run($expResult4, $actResult4, "test make appointment -> true case");
		echo "exp >>> ";print_r($expResult4); echo "</br>";
		echo "act >>> ";print_r($actResult4);
		}
	public function testapp_edit(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_f = 4;
		$expResult1 = null;	
		
		$actResult1 = $officer->app_edit($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test call appointments' data to edit -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1);
		
		$in_id_t = 2;
		$expResult2 = array('appointmentID'=>2,'patientID'=>'P002','dentistID'=>'D002','aDate'=>'2014-08-05','startTime'=>'13:00:00','endTime'=>'14:00:00','treatment'=>'Whitening','description'=>'1000 baht','submit'=>'Submit');	
		
		$actResult2 = $officer->app_edit($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test call appointments' data to edit -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
		
	public function testapp_delete(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_t = '3';
		$expResult2 = true;
		$actResult2 = $officer->app_delete($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test delete appointment -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);	
		}
	public function testPatientCalendar(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_f = 'P0002';
		$expResult1 = null;
		$actResult1 = $officer->patientCalendar($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test view patient own schedule -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1);
		
		$in_id_t = 'P001';
		//$expResult2 = array('appointmentID'=>8,'patientID'=>'P0001','userID'=>'0','aDate'=>'2014-06-17','startTime'=>'14:00:00','endTime'=>'15:00:00','treatment'=>'clean','description'=>'300 thb','submit'=>null);	
		$x = $this->load->model('Offiecer_Model');
		$x->appointmentID = 1;
		$x->patientID = 'P001';
		$x->dentistID = 'D001';
		$x->aDate = '2014-08-01';
		$x->startTime = '09:00:00';
		$x->endTime = '09:30:00';
		$x->treatment = 'Tooth braces';
		$x->description = '100 baht';
		$x->submit = 'Submit';
		$expResult2[0] = $x;
		
		$actResult2 = $officer->patientCalendar($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test view patient own schedule -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
		
		public function testDentistCalendar(){
		$this->load->library("unit_test");
		$officer = new Officer_manage();
		
		$in_id_f = 'dent001';
		$expResult1 = null;
		$actResult1 = $officer->dentistCalendar($in_id_f);
		echo $this->unit->run($expResult1, $actResult1, "test view dentist own schedule -> false case");
		echo "exp >>> ";print_r($expResult1); echo "</br>";
		echo "act >>> ";print_r($actResult1);
		
		$in_id_t = 'D002';
		//$expResult2 = array('appointmentID'=>8,'patientID'=>'P0001','userID'=>'0','aDate'=>'2014-06-17','startTime'=>'14:00:00','endTime'=>'15:00:00','treatment'=>'clean','description'=>'300 thb','submit'=>null);	
		$x = $this->load->model('Offiecer_Model');
		$x->appointmentID = 2;
		$x->patientID = 'P002';
		$x->dentistID = 'D002';
		$x->aDate = '2014-08-05';
		$x->startTime = '13:00:00';
		$x->endTime = '14:00:00';
		$x->treatment = 'Whitening';
		$x->description = '1000 baht';
		$x->submit = 'Submit';
		$expResult2[0] = $x;
		
		$actResult2 = $officer->dentistCalendar($in_id_t);
		echo $this->unit->run($expResult2, $actResult2, "test view thier own schedule -> true case");
		echo "exp >>> ";print_r($expResult2); echo "</br>";
		echo "act >>> ";print_r($actResult2);
		}
	}

?>