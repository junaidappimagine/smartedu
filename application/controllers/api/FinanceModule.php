<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class FinanceModule extends REST_Controller {    
    function FinanceModule()
    {
		parent::__construct();
		$this->load->model('financemodel');
    }

    // ------------------------------------ Finance Asset ----------------------------------------------------------------------

    function Asset_post()
    {
    	$result=$this->financemodel->addAssetData();
    	if($result['status']==true){
			$this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function Asset_get(){
    	$id=$this->get('id');
        if ($id == null)
        {
            $result=$this->financemodel->getAllAsset_details();
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
            $result=$this->financemodel->getAsset_details($id);
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

    function Asset_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->financemodel->deleteAsset($id);
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

    // ---------------------------------------------- Finace Liability ------------------------------------------------------

    function liability_post()
    {
        $result=$this->financemodel->addLiabilityData();
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function liability_get(){
        $id=$this->get('id');
        if ($id == null)
        {
            $result=$this->financemodel->getAllLiability_details();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financemodel->getLiability_details($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }   
    }

    function liability_delete(){
        $id=$this->delete('id');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financemodel->deleteLiabilityData($id);
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

    // --------------------------------------- Category -------------------------------------------------------------

    function category_post()
    {
        $result=$this->financemodel->addFinanceCategory();
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function category_get(){
        $id=$this->get('id');
        if ($id == null)
        {
            $result=$this->financemodel->getAllFinanceCategory();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financemodel->getFinanceCategory($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }  
    }

    function category_delete(){
        $id=$this->delete('id');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financemodel->deleteFinanceCategory($id);
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

    // ---------------------------------------------------- Donation ------------------------------------------------------------

    function donation_post()
    {
        $result=$this->financemodel->addDonation();
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
}