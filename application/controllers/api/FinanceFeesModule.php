<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/helpers/checktoken_helper.php';
class FinanceFeesModule extends REST_Controller {    
    function FinanceFeesModule()
    {
		parent::__construct();
        header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Content-Type,access_token");
		header("Access-Control-Allow-Methods: GET,POST,DELETE");
		$this->load->model('financefeesmod');
        $userIDByToken="";
        checkTokenAccess();
        checkAccess();
    }

    // ------------------------------------ Finance fees ----------------------------------------------------------------------

    function feesCategory_post()
    {
        $data['FINC_S_CA_ID']=$this->post('FINC_S_CA_ID');
        $data['FINC_S_CA_NAME']=$this->post('FINC_S_CA_NAME');
        $data['FINC_S_CA_DESC']=$this->post('FINC_S_CA_DESC');
        $data['FINC_S_CA_BATCH']=$this->post('FINC_S_CA_BATCH');
        $result=$this->financefeesmod->addFeesCategory($data);
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message'],'FINC_S_CA_ID'=>$result['FINC_S_CA_ID']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesCategory_get(){
    	$id=$this->get('id');
        if ($id == null)
        {
            $result=$this->financefeesmod->getAllFeesCategory();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'result'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getFeesCategory($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'result'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }	
	}
    function feesCategory_delete(){
    	$id=$this->delete('id');
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function particular_get(){
        $id=$this->get('id');
        if ($id == null)
        {
            $result=$this->financefeesmod->getAllFeesParticular();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getFeesParticular($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
    function particular_delete(){
        $id=$this->delete('id');
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesDiscount_get(){
        $id=$this->get('FINC_FEE_M_ID');
        if ($id == null)
        {
            $result=$this->financefeesmod->getAllFeesDiscount();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getFeesDiscount($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesFine_get(){
        $id=$this->get('FINC_S_FI_ID');
        if ($id == null)
        {
            $result=$this->financefeesmod->getAllFeesFine();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getFeesFine($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }   
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function feesSchedule_get(){
        $id=$this->get('FINC_SCH_ID');
        if ($id == null)
        {
            $result=$this->financefeesmod->getAllScheduleFees();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getScheduleFees($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }     
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function refund_get(){
        $id=$this->get('FINC_RF_ID'); 

        if ($id == null)
        {
            $result=$this->financefeesmod->getAllRefundData();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getRefundData($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        } 
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function applyRefund_get(){
        $id=$this->get('FINC_AP_RF_ID');
        if ($id == null)
        {
            $result=$this->financefeesmod->getAllApplyRefundData();
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([ 'status' => FALSE, 'message' => 'Employee data could not be found' ], REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $result=$this->financefeesmod->getApplyRefundData($id);
            if (!empty($result)){
                $this->set_response(['status' =>TRUE,'aaData'=>$result], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response(['status' => FALSE, 'message' => 'Employee data could not be found'], REST_Controller::HTTP_NOT_FOUND);
            }
        }     
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
        if($result['status']==true){
            $this->set_response(['status' =>TRUE,'message'=>$result['message']], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    // function applyRefund_get(){
    //     $id=$this->get('FINC_AP_RF_ID');
    //     $result=$this->financefeesmod->getFeeCollection($id);
    //     echo json_encode($result);      
    // }
    // function applyRefund_delete(){
    //     $id=$this->delete('FINC_AP_RF_ID');
    //     if ($id == null)
    //     {
    //         $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
    //     }else{
    //         $result=$this->financefeesmod->deleteFeeCollection($id);
    //         if($result!=0){
    //             $message = [
    //             'id' => $id,
    //             'message' => 'Record Deleted Successfully'
    //             ];
    //             $this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
    //         }else{
    //             $this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
    //         }
    //     }  
    // }
}
?>
   