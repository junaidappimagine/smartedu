<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class FinanceTxnAPI extends REST_Controller {    
    function FinanceTxnAPI()
    {
		parent::__construct();
		$this->load->model('financetxnmodel');
    }

    // ------------------------------------ Finance Expense ----------------------------------------------------------------------

    function expense_post()
    {
    	$result=$this->financetxnmodel->addExpenseData();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function expense_get(){
    	$id=$this->get('FINC_TXN_EX_ID');
    	$result=$this->financetxnmodel->getExpense_details($id);
    	echo json_encode($result);		
	}

    function expense_delete(){
    	$id=$this->delete('FINC_TXN_EX_ID');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->financetxnmodel->deleteExpense($id);
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

    // ------------------------------------ Finance Income ----------------------------------------------------------------------

    function income_post()
    {
        $result=$this->financetxnmodel->addIncomeData();
        if($result==true){
            $this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
        }else{
            $this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
        }
    }
    function income_get(){
        $id=$this->get('FINC_TXN_IN_ID');
        $result=$this->financetxnmodel->getIncome_details($id);
        echo json_encode($result);      
    }

    function income_delete(){
        $id=$this->delete('FINC_TXN_IN_ID');
        if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            $result=$this->financetxnmodel->deleteIncome($id);
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
   