<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class StudentAPI extends REST_Controller {    
    function StudentAPI()
    {
		parent::__construct();
		$this->load->model('studentmodel');
		header("Access-Control-Allow-Origin: *");
    }

    // Student Admission 
	
    function studentAdmission_post()
    {
    	$result=$this->studentmodel->addStudentAdmissionDetails();
    	if(!empty($result)){
			$this->set_response(['status' =>TRUE,'admission no'=>$result], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
	
	// Student Parent Details
	
	function studentParentDetails_post()
    {
    	$result=$this->studentmodel->addStudentParentDetails();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"success"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
	
	// Student Previous Education
	
	function studentPreviousEducation_post()
    {
    	$result=$this->studentmodel->addStudentPreviousEducation();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"success"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
	
	
	
	function studentAdmission_get(){
		$users=$this->studentmodel->getStudent();
		if (!empty($users)){
			$this->set_response(['status' =>TRUE,'aaData'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
		}
		else
		{
			$this->set_response([
			'status' => FALSE,
			'message' => 'Student data could not be found'
			], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
		}
    }
}