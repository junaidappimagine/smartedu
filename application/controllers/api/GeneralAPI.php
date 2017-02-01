<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class GeneralAPI extends REST_Controller {    
    function GeneralAPI()
    {
		parent::__construct();
		$this->load->model('GeneralMod');
		header("Access-Control-Allow-Origin: *");
    }

    // Login Details 
	
	function login_get(){
		$email = $this->get('USER_EMAIL');
		$pwd = $this->get('USER_PASSWORD');
		if($email==NULL){
			$this->set_response([
				'status' => FALSE,
				'message' => 'Login Detail could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
		}else{
			$users=$this->GeneralMod->getLoginDetail($email,$pwd);
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Login Detail could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}
    }
	
}