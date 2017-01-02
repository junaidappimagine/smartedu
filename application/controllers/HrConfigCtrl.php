<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class HrConfigCtrl extends REST_Controller {    
    function HrConfigCtrl()
    {
		parent::__construct();
		$this->load->model('hrConfigModel');
    }

    // Employee category

    function employeeCategory_post()
    {
    	$result=$this->hrConfigModel->addEmployeeCategory();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeCategory_get(){
    	$id=$this->get('id');
    	$result=$this->hrConfigModel->getCategory_details($id);
    	echo json_encode($result);		
	}

    function employeeCategory_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteCategory($id);
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
    	$result=$this->hrConfigModel->addDepartment_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeDepartment_get(){
		$id=$this->get('id');
		$result=$this->hrConfigModel->fetchDaprtment_Details($id);
    	echo json_encode($result);
	}
    function employeeDepartment_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteDepartment($id);
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
    	$result=$this->hrConfigModel->addPosition_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeePosition_get(){
		$id=$this->get('id');
		$result=$this->hrConfigModel->fetchAllPosition_Details($id);
    	echo json_encode($result);
	}
    function employeePosition_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deletePosition($id);
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
    	$result=$this->hrConfigModel->addGrade_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeGrade_get(){
		$id=$this->get('id');
		$result=$this->hrConfigModel->fetchGrade_Details($id);
    	echo json_encode($result);
	}
    function employeeGrade_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteGrade($id);
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
    	$result=$this->hrConfigModel->addleaveType();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeLeaveType_get(){
		$id=$this->get('id');
		$result=$this->hrConfigModel->fetchLeaveType_Details();
    	echo json_encode($result);
	}
    function employeeLeaveType_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteLeaveType($id);
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
    	$result=$this->hrConfigModel->addBankDetails();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeBankdetails_get(){
		$id=$this->get('id');
		$result=$this->hrConfigModel->fetchBank_Details($id);
    	echo json_encode($result);
		
	}
    function employeeBankdetails_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteBankDetails($id);
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