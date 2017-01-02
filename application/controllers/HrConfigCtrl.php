<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class HrConfigCtrl extends REST_Controller {    
    function HrConfigCtrl()
    {
		parent::__construct();
		$this->load->model('HrConfigModel');
    }

    // Employee category

    function employeeCategory_post()
    {
    	$result=$this->HrConfigModel->addEmployeeCategory();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeCategory_get(){
    	$id=$this->get('id');
    	$result=$this->HrConfigModel->getCategory_details($id);
    	echo json_encode($result);		
	}

    function employeeCategory_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deleteCategory($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}  
    }

    

    // ------------------------------------------------------- Employee Department ---------------------------------------------

    function employeeDepartment_post()
    {
    	$result=$this->HrConfigModel->addDepartment_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeDepartment_get(){
		$id=$this->get('id');
		$result=$this->HrConfigModel->fetchDaprtment_Details($id);
    	echo json_encode($result);
	}
    function employeeDepartment_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deleteDepartment($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}  
    }


    // ---------------------------------------------------Employee Position ----------------------------------------

    function employeePosition_post()
    {
    	$result=$this->HrConfigModel->addPosition_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeePosition_get(){
		$id=$this->get('id');
		$result=$this->HrConfigModel->fetchAllPosition_Details($id);
    	echo json_encode($result);
	}
    function employeePosition_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deletePosition($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}  
    }

    // -------------------------------------------- Employee Grade --------------------------------------------

    function employeeGrade_post()
    {
    	$result=$this->HrConfigModel->addGrade_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeGrade_get(){
		$id=$this->get('id');
		$result=$this->HrConfigModel->fetchGrade_Details($id);
    	echo json_encode($result);
	}
    function employeeGrade_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deleteGrade($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}
    }

    // ------------------------------------------ Employee Leave Type ----------------------------------------------------


    function employeeLeaveType_post(){
    	$result=$this->HrConfigModel->addleaveType();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeLeaveType_get(){
		$id=$this->get('id');
		$result=$this->HrConfigModel->fetchLeaveType_Details();
    	echo json_encode($result);
	}
    function employeeLeaveType_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deleteLeaveType($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}
    }

    // ------------------------------------------ Bank Details --------------------------------------------------------------

    function employeeBankdetails_post(){
    	$result=$this->HrConfigModel->addBankDetails();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeBankdetails_get(){
		$id=$this->get('id');
		$result=$this->HrConfigModel->fetchBank_Details($id);
    	echo json_encode($result);
		
	}
    function employeeBankdetails_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deleteBankDetails($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}
    }

}