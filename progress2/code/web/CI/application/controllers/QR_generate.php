<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH."manage/Officer_manage.php";
class QR_generate extends CI_Controller {
	
	public function gen($patientID){
		$this->load->library('ciqrcode');
		
		header("Content-Type: image/png");
		$params['data'] = $patientID;
		$this->ciqrcode->generate($params);
		//$this->load->view('o_qr');
		}
	
	
	}
?>