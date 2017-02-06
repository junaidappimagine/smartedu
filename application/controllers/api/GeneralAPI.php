<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class GeneralAPI extends REST_Controller {    
    function GeneralAPI()
    {
		parent::__construct();
		$this->load->model('GeneralMod');
		header("Access-Control-Allow-Origin: *");
		$this->load->library('Curl');
		$this->load->library('session');
		// $headers = apache_request_headers();
		// print_r($headers);
		// exit;
    }
    function tokenGen($type,$client_id,$client_secret){
    	if($type=='client'){
	    	$data = array(
	            'grant_type'      => 'client_credentials',
	            //'grant_type'      => 'password',
	            'client_id' => $client_id,
	            'client_secret'    => $client_secret

	        );	
	        $path='http://localhost/smartedu/api/Auth/getToken';
    	}else if($type=='password'){
    		$data = array(
            'grant_type'      => 'password',
            'client_id' => '123',
            'username' => 'admin@gmail.com',
            'password'    => '123'

        );
    		$path='http://localhost/smartedu/api/Auth/getToken';
    	}
        
        //grant_type=client_credentials&client_id=TestClient&client_secret=TestSecret
        //grant_type=password&client_id=TestClient&username=bshaffer&password=brent123

    $data_string = json_encode($data);
    $curl = curl_init($path);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
    );

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  // Insert the data

    // Send the request
    $result = curl_exec($curl);
    $valu=json_decode($result,true);
    // print_r($valu);
    // exit;
    $user_token=$valu['access_token'];
    $this->session->set_userdata('user_token',$user_token);
    // $path=APPPATH;
    // echo $path;
    //$test= new CI_Security();
    //echo $this->session->userdata('user_token');
    //$this->config->set_item('csrf_token_name','asdasd');
    //$config['csrf_exclude_uris'] = $user_token;
    //echo "<br>";
    // echo $this->security->get_csrf_token_name().' : '. $this->security->get_csrf_hash(); 
    // exit;
    return $user_token;
    // Free up the resources $curl is using
   // curl_close($curl);

    //echo json_encode($result);
  //   	$result = $this->curl->simple_post('http://localhost/smartedu/api/Auth/getToken',false,array(CURLOPT_USERAGENT => true));
  //   	// $result = $this->curl->simple_post('http://localhost/smartedu/api/Auth/getToken',false,array(CURLOPT_USERAGENT => true,'grant_type' => 'client_credentials','client_id'=>'123','client_secret'=>'123456'));
		// var_dump($result);
		//pri
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
				//$type='password';
				$type='client';
				$client_id='123';
				$client_secret='123456';
				$users=$this->tokenGen($type,$client_id,$client_secret);
				//$users=json_decode($users);
				$this->set_response(['status' =>TRUE,'access_token'=> $users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
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
	
	function pushReg_post(){
		$regId = $this->post('regId');
		$users=$this->GeneralMod->addPushReg($regId);
		if (!empty($users)){
			$this->set_response(['status' =>TRUE,'message'=>$users], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
		}
		else
		{
			$this->set_response([
			'status' => FALSE,
			'message' => 'regId could not be found'
			], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
		}
	}
	
}