<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class HrEmployeeMgmntModule extends REST_Controller {    
    function HrEmployeeMgmntModule()
    {
		parent::__construct();
		$this->load->model('employeemgmntmodel');
    }

    // ------------------------------------ Leave Reset -----------------------------------------------------------------

    function employeeAdmission_post()
    {
        $data['EMP_ID']=$this->post('EMP_ID');
        $data['EMP_NO']=$this->post('EMP_NO');
        $data['EMP_JOIN_DT']=$this->post('EMP_JOIN_DT');
        $data['EMP_FIRST_NAME']=$this->post('EMP_FIRST_NAME');
        $data['EMP_LAST_NAME']=$this->post('EMP_LAST_NAME');
        $data['EMP_GENDER']=$this->post('EMP_GENDER');
        $data['EMP_DOB']=$this->post('EMP_DOB');
        $data['EMP_MARITAL_STATUS']=$this->post('EMP_MARITAL_STATUS');
        $data['EMP_RELIGION']=$this->post('EMP_RELIGION'); 
        $data['EMP_BLOOD_GROUP']=$this->post('EMP_BLOOD_GROUP');
        $data['EMP_NATIONALITY']=$this->post('EMP_NATIONALITY');
        $data['EMP_PROFILE']=$this->post('EMP_PROFILE');
        $data['EMP_DEPT']=$this->post('EMP_DEPT'); 
        $data['EMP_CATEGORY']=$this->post('EMP_CATEGORY');
        $data['EMP_POSITION']=$this->post('EMP_POSITION');
        $data['EMP_GRADE']=$this->post('EMP_GRADE');
        $data['EMP_JOB_TITLE']=$this->post('EMP_JOB_TITLE'); 
        $data['EMP_QUALI'] = $this->post('EMP_QUALI');
        $data['EMP_EXPE_INFO'] = $this->post('EMP_EXPE_INFO');
        $data['EMP_TOT_EXPE'] = $this->post('EMP_TOT_EXPE');
        $data['EMP_ADD_1'] = $this->post('EMP_ADD_1');
        $data['EMP_ADD_2'] = $this->post('EMP_ADD_2');
        $data['EMP_CITY'] = $this->post('EMP_CITY');
        $data['EMP_STATE'] = $this->post('EMP_STATE');
        $data['EMP_PINCODE'] = $this->post('EMP_PINCODE');
        $data['EMP_COUNTRY']=$this->post('EMP_COUNTRY');
        $data['EMP_PHONE']=$this->post('EMP_PHONE');
        $data['EMP_OFF_PHONE']=$this->post('EMP_OFF_PHONE'); 
        $data['EMP_MOBILE'] = $this->post('EMP_MOBILE');
        $data['EMP_EMAIL'] = $this->post('EMP_EMAIL');
        $data['EMP_ACC_NAME'] = $this->post('EMP_ACC_NAME');
        $data['EMP_ACC_NO'] = $this->post('EMP_ACC_NO');
        $data['EMP_BANK_NAME'] = $this->post('EMP_BANK_NAME');
        $data['EMP_BANK_BRANCH_NAME'] = $this->post('EMP_BANK_BRANCH_NAME');
        $data['EMP_PASSPORT_NO'] = $this->post('EMP_PASSPORT_NO');
        $data['EMP_PAN_NO'] = $this->post('EMP_PAN_NO');
        $data['EMP_ADHAR_NO'] = $this->post('EMP_ADHAR_NO');
        $data['EMP_WORK_PERMIT'] = $this->post('EMP_WORK_PERMIT');

    	$result=$this->employeemgmntmodel->saveEmployeeAdmission($data);
    	if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
}
?>