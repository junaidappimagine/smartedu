<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class FinanceFeesAPI extends REST_Controller {    
    function FinanceFeesAPI()
    {
		parent::__construct();
		$this->load->model('financefeesmod');
    }

    // ------------------------------------ Finance fees ----------------------------------------------------------------------

    function feesCategory_post()
    {
    	$result=$this->financefeesmod->addFeesCategory();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function feesCategory_get(){
    	$id=$this->get('FINC_S_CA_ID');
    	$result=$this->financefeesmod->getFeesCategory($id);
    	echo json_encode($result);		
	}
    function feesCategory_delete(){
    	$id=$this->delete('FINC_S_CA_ID');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->financefeesmod->deleteFeesCategory($id);
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

    // ---------------------------------------------- Finance setting perticular -----------------------------------------------
    function particular_post()
    {
        $result=$this->financefeesmod->addParticularData();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function particular_get(){
        $id=$this->get('FINC_S_PA_ID');
        $result=$this->financefeesmod->getFeesParticular($id);
        echo json_encode($result);      
    }
    function particular_delete(){
        $id=$this->delete('FINC_S_PA_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financefeesmod->deleteFeesParticular($id);
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


    // ---------------------------------------------- Finance Fees Discount -----------------------------------------------
    function feesDiscount_post()
    {
        $result=$this->financefeesmod->addFeesDiscount();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesDiscount_get(){
        $id=$this->get('FINC_FEE_M_ID');
        $result=$this->financefeesmod->getFeesDiscount($id);
        echo json_encode($result);      
    }
    function feesDiscount_delete(){
        $id=$this->delete('FINC_FEE_M_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financefeesmod->deleteFeesDiscount($id);
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


    // ---------------------------------------------- Finance Fees Fine-----------------------------------------------
    function feesFine_post()
    {
        $result=$this->financefeesmod->addFeesFine();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesFine_get(){
        $id=$this->get('FINC_S_FI_ID');
        $result=$this->financefeesmod->getFeesFine($id);
        echo json_encode($result);      
    }
    function feesFine_delete(){
        $id=$this->delete('FINC_S_FI_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financefeesmod->deleteFeesFine($id);
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


    // ---------------------------------------------- Schedule Fees-----------------------------------------------
    function feesSchedule_post()
    {
        $result=$this->financefeesmod->addScheduleFees();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesSchedule_get(){
        $id=$this->get('FINC_SCH_ID');
	//print_r($id);exit;
        $result=$this->financefeesmod->getScheduleFees($id);
        echo json_encode($result);      
    }
    function feesSchedule_delete(){
        $id=$this->delete('FINC_SCH_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financefeesmod->deleteSheduleFees($id);
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


    // ---------------------------------------------- Fees Refund -----------------------------------------------
    function refund_post()
    {
        $result=$this->financefeesmod->addRefundData();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function refund_get(){
        $id=$this->get('FINC_RF_ID');
        $result=$this->financefeesmod->getRefundData($id);
        echo json_encode($result);      
    }
    function refund_delete(){
        $id=$this->delete('FINC_RF_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financefeesmod->deleteRefund($id);
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

    // ---------------------------------------------- Finance Applied Refund -----------------------------------------------
    function applyRefund_post()
    {
        $result=$this->financefeesmod->applyRefundData();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function applyRefund_get(){
        $id=$this->get('FINC_AP_RF_ID');
        $result=$this->financefeesmod->getApplyRefundData($id);
        echo json_encode($result);      
    }
    function applyRefund_delete(){
        $id=$this->delete('FINC_AP_RF_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financefeesmod->deleteApplyRefund($id);
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

    // ---------------------------------------------- Finance Fees Collection -----------------------------------------------
    function feeCollection()
    {
        $result=$this->financefeesmod->addFeeCollection();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    //function applyRefund_get(){
    //    $id=$this->get('FINC_AP_RF_ID');
    //    $result=$this->financefeesmod->getFeeCollection($id);
    //    echo json_encode($result);      
    //}
    //function applyRefund_delete(){
    //    $id=$this->delete('FINC_AP_RF_ID');
    //    if ($id == null)
    //    {
    //        $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
    //    }else{
    //        $result=$this->financefeesmod->deleteFeeCollection($id);
    //        if($result!=0){
    //            $message = [
    //            'id' => $id,
    //            'message' => 'Record Deleted Successfully'
    //            ];
    //            $this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
    //        }else{
    //            $this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
    //        }
    //    }  
    //}
}
?>
   