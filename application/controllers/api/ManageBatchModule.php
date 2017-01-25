<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class ManageBatchModule extends REST_Controller {    
    function ManageBatchModule()
    {
		parent::__construct();
		$this->load->model('batchmodel');
		header("Access-Control-Allow-Origin: *");
    }

	// Acodemics Class And Batch 
	
	function BatchDetail_post()
    {
		$id = $this->post('ACA_BAT_ID');
		if($id==NULL){
			$result=$this->batchmodel->addBatchDetail();
			if(!empty($result)){
				$this->set_response(['status' =>TRUE,'ACA_BAT_ID'=>$result], REST_Controller::HTTP_CREATED);
			}else{
				$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
			}
		}else{
			$result=$this->batchmodel->editBatchDetail($id);
			if($result==true){
				$this->set_response(['status' =>TRUE,'message'=>"Batch Updated successfully"], REST_Controller::HTTP_CREATED);
			}else{
				$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
			}
		}
    }
	
	function BatchDetail_get(){
		$id = $this->get('ACA_COU_ID');
		if($id==NULL){
			$users=$this->batchmodel->getBatchDetailAll();
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Batch Details could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}else{
			$users=$this->batchmodel->getBatchDetail($id);
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Batch Details could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}
    }
	
	// Acodemics Subject Details 
	function SubjectDetail_post()
    {
		$id = $this->post('ACA_SUB_ID');
		if($id==NULL){
			$result=$this->batchmodel->addSubjectDetail();
			if(!empty($result)){
				$this->set_response(['status' =>TRUE,'ACA_SUB_ID'=>$result], REST_Controller::HTTP_CREATED);
			}else{
				$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
			}
		}else{
			$result=$this->batchmodel->editSubjectDetail($id);
			if($result==true){
				$this->set_response(['status' =>TRUE,'message'=>"Subject Updated successfully"], REST_Controller::HTTP_CREATED);
			}else{
				$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
			}
		}
    }
	
	function SubjectDetail_get(){
		$id = $this->get('ACA_SUB_ID');
		if($id==NULL){
			$users=$this->batchmodel->getSubjectDetailAll();
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Subject Details could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}else{
			$users=$this->batchmodel->getSubjectDetail($id);
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Subject Details could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}
    }
	
	function ManageSubjectDetail_get(){
		$id = $this->get('ACA_COU_ID');
		$id1 = $this->get('ACA_BAT_ID');
		// if($id==NULL){
			// $users=$this->batchmodel->getSubjectDetailAll();
			// if (!empty($users)){
				// $this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			// }
			// else
			// {
				// $this->set_response([
				// 'status' => FALSE,
				// 'message' => 'Subject Details could not be found'
				// ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			// }
		// }else{
			$users=$this->batchmodel->ManageSubjectDetail($id,$id1);
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Subject Details could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		//}
    }
	
	function ClassAndBatch_get(){
		$users=$this->batchmodel->getStudent();
		if (!empty($users)){
			$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
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