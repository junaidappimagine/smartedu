<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class SampleCtr extends REST_Controller {
    
    function SampleCtr()
    {
	parent::__construct();
	$this->load->model('SampleMod');
    }
    
   // Sample Date 
	
	public function sampleAPI_post()
    {
        $result=$this->SampleMod->Saminsert();
		if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
	
	public function sampleAPI_get()
    {
		$id = $this->get('id');
		if($id==NULL){
			$users=$this->SampleMod->SamselectAll();
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Sample data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}else{
			$user=$this->SampleMod->Samselect($id);
			if (!empty($user)){
				$this->set_response(['status' =>TRUE,'message'=>$user], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Sample data could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}
      
    }
	
	 public function sampleAPI_delete()
    {
        $id = $this->delete('id');
        // // Validate the id.
        if ($id == null)
        {
            // Set the response and exit
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->SampleMod->SamDelete($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Deleted the resource'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}    
    }
	
    
}
