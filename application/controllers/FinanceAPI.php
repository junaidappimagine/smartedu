<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class FinanceAPI extends REST_Controller {    
    function FinanceAPI()
    {
		parent::__construct();
		$this->load->model('financemodel');
    }

    // ------------------------------------ Finance Asset ----------------------------------------------------------------------

    function Asset_post()
    {
    	$result=$this->financemodel->addAssetData();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function Asset_get(){
    	$id=$this->get('id');
    	$result=$this->financemodel->getAsset_details($id);
    	echo json_encode($result);		
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
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function liability_get(){
        $id=$this->get('FINC_LI_ID');
        $result=$this->financemodel->getLiability_details($id);
        echo json_encode($result);      
    }

    function liability_delete(){
        $id=$this->delete('FINC_LI_ID');
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
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function category_get(){
        $id=$this->get('FINC_CA_ID');
        $result=$this->financemodel->getFinanceCategory($id);
        echo json_encode($result);      
    }

    function category_delete(){
        $id=$this->delete('FINC_CA_ID');
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
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
}