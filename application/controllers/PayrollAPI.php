<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class PayrollAPI extends REST_Controller {    
    function PayrollAPI()
    {
		parent::__construct();
		$this->load->model('payrollmod_api');
    }

    // Payroll Category

    function payrollCategory_post()
    {
    	$result=$this->payrollmod_api->PayrollCategory();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    } 
    function payrollGroup_post()
    {
        $result=$this->payrollmod_api->payrollGroup();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function payslipGeneration() {
        $result=$this->payrollmod_api->AddPayslipGeneration();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
}
?>