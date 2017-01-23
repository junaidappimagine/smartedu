<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class HrConfigModule extends REST_Controller {    
    function HrConfigModule()
    {
		parent::__construct();
		$this->load->model('hrConfigModel');
		header("Access-Control-Allow-Origin: *");
    }

    //-------------------------------------  Employee category ---------------------------------------------------

    function employeeCategory_post()
    {
    	$result=$this->hrConfigModel->addEmployeeCategory();
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message'],'EMP_C_ID'=>$result['EMP_C_ID']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeCategory_get(){
    	$id=$this->get('id');
    	if ($id == null)
        {
        	$result=$this->hrConfigModel->getAllCategory_details();
        	if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else{
        	$result=$this->hrConfigModel->getCategory_details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); 
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND);
			}
        }    			
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
				$message = [
				'id' => $id,
				'message' => 'There is no Record found'
				];
				$this->set_response(['status'=>FALSE,'message'=>$message], REST_Controller::HTTP_NOT_FOUND);
			}
		}  
    }

    

    // ------------------------------------------------------- Employee Department ---------------------------------------------

    function employeeDepartment_post()
    {
    	$result=$this->hrConfigModel->addDepartment_Details();
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeDepartment_get(){
		$id=$this->get('id');
		if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllDaprtment_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchDaprtment_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
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
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeePosition_get(){
		$id=$this->get('id');
		if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllPosition_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchPosition_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
		
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
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeGrade_get(){
		$id=$this->get('id');
		if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllGrade_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchGrade_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
		
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
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeLeaveType_get(){
		$id=$this->get('id');
    	if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllLeaveType_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchLeaveType_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
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
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeBankdetails_get(){
		$id=$this->get('id');
    	if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllBank_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchBank_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
		
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

    // ------------------------------------------ Wroking Days --------------------------------------------------------------

    function employeeWorkingDays_post(){
    	$result=$this->hrConfigModel->addWorkingDays_Details();
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeWorkingDays_get(){
		$id=$this->get('id');
    	if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllWorkingDays_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchWorkingDays_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
		
	}
    function employeeWorkingDays_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteWorkingDays($id);
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

    // ------------------------------------------ Employee Additional Details --------------------------------------------

    function employeeAdditionalDetails_post(){
    	$result=$this->hrConfigModel->addAdditional_Details();
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeAdditionalDetails_get(){
		$id=$this->get('id');
    	if ($id == null)
        {
        	$result=$this->hrConfigModel->fetchAllAdditional_Details();
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else {
        	$result=$this->hrConfigModel->fetchAdditional_Details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Employee data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }
		
	}
    function employeeAdditionalDetails_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteAdditionalDetails($id);
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