<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
//require APPPATH . '/libraries/server.php';
require APPPATH . '/helpers/checktoken_helper.php';
class Profile extends REST_Controller {    
    function Profile()
    {
		parent::__construct();
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type,access_token");
		header("Access-Control-Allow-Methods: GET,POST,DELETE");
		$this->load->model('profileModel');
		//loadServer('getResource'); 
		$userIDByToken="";
		checkTokenAccess();
		checkAccess();
    }
    
	//-------------------------------------  Profile Add/Update ---------------------------------------------------
    function profileDetails_post()
    {
    	$data['ID']=$this->post('ID');
    	$data['FIRSTNAME']=$this->post('FIRSTNAME');
    	$data['MIDDLENAME']=$this->post('MIDDLENAME');
    	$data['LASTNAME']=$this->post('LASTNAME');
    	$data['DOB']=$this->post('DOB');
    	$data['GENDER']=$this->post('GENDER');
    	$data['IMAGE1']=$this->post('IMAGE1');
    	$data['IMAGE2']=$this->post('IMAGE2');
    	$data['EMAIL']=$this->post('EMAIL'); 
    	$data['PHONE_NO_1']=$this->post('PHONE_NO_1');
    	$data['PHONE_NO_2']=$this->post('PHONE_NO_2');
    	$data['JOINING_DATE']=$this->post('JOINING_DATE');
    	$data['RELIGION']=$this->post('RELIGION'); 
    	$data['MOTHER_TONGUE']=$this->post('MOTHER_TONGUE');
    	$data['FACEBOOK_LINK']=$this->post('FACEBOOK_LINK');
    	$data['GOOGLE_LINK']=$this->post('GOOGLE_LINK');
    	$data['BLOOD_GROUP']=$this->post('BLOOD_GROUP'); 
    	$data['EDUCATION_ID']=$this->post('EDUCATION_ID'); 
    	$data['LOCATION_ID']=$this->post('LOCATION_ID'); 
    	$data['PASSWORD'] = $this->post('PASSWORD');
	   	$data['CRT_USER_ID'] = $this->post('CRT_USER_ID');
	   	$data['CITY'] = $this->post('CITY');
	   	$data['STATE'] = $this->post('STATE');
	   	$data['COUNTRY'] = $this->post('COUNTRY');
	   	$data['ZIPCODE'] = $this->post('ZIPCODE');
	   	$data['LANDMARK'] = $this->post('LANDMARK');
	   	$data['STREET'] = $this->post('STREET');
	   	$data['QUALICATION'] = $this->post('QUALICATION');
	   	$data['INST_NAME'] = $this->post('INST_NAME');
	   	$data['ADDRESS1'] = $this->post('ADDRESS1');
	   	$data['ADDRESS2'] = $this->post('ADDRESS2');
	   	$data['UPLOAD_DOC1'] = $this->post('UPLOAD_DOC1');
	   	$data['UPLOAD_DOC2'] = $this->post('UPLOAD_DOC2');
	   	$data['PERCENTAGE'] = $this->post('PERCENTAGE');
	   	$data['DURATION_FROM'] = $this->post('DURATION_FROM');
	   	$data['DURATION_TO'] = $this->post('DURATION_TO');
    	$result=$this->profileModel->saveProfileDetails($data);
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message'],'PROF_ID'=>$result['PROF_ID']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function profileDetails_get(){
    	$id=$this->get('id');
    	if ($id == null)
        {
        	$result=$this->hrConfigModel->getAllProfile_details();
        	if (!empty($result)){
				$this->set_response(['status' =>TRUE,'result'=>$result], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Profile data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
        }else{
        	$result=$this->hrConfigModel->getProfile_details($id);
    		if (!empty($result)){
				$this->set_response(['status' =>TRUE,'result'=>$result], REST_Controller::HTTP_OK); 
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Profile data could not be found'
				], REST_Controller::HTTP_NOT_FOUND);
			}
        }    			
	}

    function profileDetails_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->hrConfigModel->deleteProfileDetails($id);
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
}