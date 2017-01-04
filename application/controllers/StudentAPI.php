<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class StudentAPI extends REST_Controller {    
    function StudentAPI()
    {
		parent::__construct();
		$this->load->model('studentmodel');
    }

    // ------------------------------------ Student Admission ----------------------------------------------------------

    function studentAdmission_post()
    {
    	$result=$this->studentmodel->addStudentAdmissionDetails();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
}