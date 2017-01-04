<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class EmployeeMngmnt extends REST_Controller {    
    function EmployeeMngmnt()
    {
		parent::__construct();
		$this->load->model('employeemgmnt');
    }

    // ------------------------------------ Leave Reset -----------------------------------------------------------------

    function employeeAdmission_post()
    {
    	$result=$this->employeemgmnt->saveEmployeeAdmission();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
 //    function employeeAdmission_get(){
 //    	$id=$this->get('EMP_RES_ID');
 //    	$result=$this->employeemgmnt->getEmployeeAdmission($id);
 //    	echo json_encode($result);		
	// }

 //    function employeeAdmission_delete(){
 //    	$id=$this->delete('EMP_RES_ID');
 //    	if ($id == null)
 //        {
 //            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
 //        }else{
	// 		$result=$this->employeemgmnt->deleteEmployeeAdmission($id);
	// 		if($result!=0){
	// 			$message = [
	// 			'id' => $id,
	// 			'message' => 'Record Deleted Successfully'
	// 			];
	// 			$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
	// 		}else{
	// 			$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
	// 		}
	// 	}  
 //    }
    function employeePayroll_post()
    {
    	$result=$this->employeemgmnt->addPayrollDetails();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }

    // ------------------------------------- Employee Sub Assoc ---------------------------------------------------------

    function employeeSubjectAssociation_post()
    {
    	$result=$this->employeemgmnt->addSubjectAssociation();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeSubjectAssociation_get(){
    	$id=$this->get('EMP_AS_ID');
    	$result=$this->financetxnmodel->getSubAssociation($id);
    	echo json_encode($result);		
	}

    function employeeSubjectAssociation_delete(){
    	$id=$this->delete('EMP_AS_ID');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->financetxnmodel->deleteAssociationData($id);
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
?>