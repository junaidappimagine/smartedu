<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class GeneralAPI extends REST_Controller {    
    function GeneralAPI()
    {
		parent::__construct();
		$this->load->model('GeneralMod');
		header("Access-Control-Allow-Origin: *");
    }

    // Login Details 
	
	function login_get(){
		$email = $this->get('USER_EMAIL');
		$pwd = $this->get('USER_PASSWORD');
		if($email==NULL){
			$this->set_response([
				'status' => FALSE,
				'message' => 'Login Detail could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
		}else{
			$users=$this->GeneralMod->getLoginDetail($email,$pwd);
			if (!empty($users)){
				$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
			}
			else
			{
				$this->set_response([
				'status' => FALSE,
				'message' => 'Login Detail could not be found'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		}
    }
	
	// File Upload API
	
	function fileUpload_post(){
		$folderPath = $config['upload_path'] = 'application/uploads/';
		$config['allowed_types'] = '*';   
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('file')){
			$this->set_response(['status' =>FALSE,'message'=>'Upload Error'], REST_Controller::HTTP_NOT_FOUND);
		}else{
			$data1 = $this->upload->data();
			$filePath1=$folderPath.$data1['file_name'];
			$this->set_response(['status' =>TRUE,'message'=>$filePath1], REST_Controller::HTTP_OK);
		}
	}
	
	function mFileUpload_post(){
		// $folderPath = $config['upload_path'] = 'application/uploads/';
		// $config['allowed_types'] = '*';   
		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
		// if(!$this->upload->do_upload('file')){
			// $this->set_response(['status' =>FALSE,'message'=>'Upload Error'], REST_Controller::HTTP_NOT_FOUND);
		// }else{
			// $data1 = $this->upload->data();
			// $filePath1=$folderPath.$data1['file_name'];
			// $this->set_response(['status' =>TRUE,'message'=>$filePath1], REST_Controller::HTTP_OK);
		// }
		$file=$this->response($_FILES);
		$cpt = count($_FILES['file']['name']);
		$this->set_response(['status' =>TRUE,'message'=>$cpt], REST_Controller::HTTP_OK);
		for($i=0; $i<$cpt-1; $i++){
			if(!empty($_FILES['file']['name'][$i])){
				$_FILES['file']['name']= $_FILES['file']['name'][$i];
				$_FILES['file']['type']= $_FILES['file']['type'][$i];
				$_FILES['file']['tmp_name']= $_FILES['file']['tmp_name'][$i];
				$_FILES['file']['error']= $_FILES['file']['error'][$i];
				$_FILES['file']['size']= $_FILES['file']['size'][$i];
				$config['upload_path'] = 'application/uploads/';
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('file')){
					$this->set_response(['status' =>FALSE,'message'=>'Upload Error'], REST_Controller::HTTP_NOT_FOUND);
				}else{
					$data1 = $this->upload->data();
					$filePath1=$folderPath.$data1['file_name'];
					$this->set_response(['status' =>TRUE,'message'=>$filePath1], REST_Controller::HTTP_OK);
				}
			}
		}
		
      // $this->load->library('upload', $config);
      // $this->upload->initialize($config);
      // $this->upload->do_upload('file');
      // $file_data=$this->upload->data();
      // $file_name=$file_data['file_name'];
      // $file_size=$file_data['file_size'];
      // $file_size=$file_size/1024;//for KB
      // $target_file =base_url().$config['upload_path'] . $file_name;
// above $files = $_FILES;
		
	}
	
}