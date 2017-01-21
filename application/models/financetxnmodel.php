<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class financetxnmodel extends CI_Model {

		// ------------------------------ Finance Expense -----------------------------------------------------------------
		public function addExpenseData(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->data->FINC_TXN_EX_ID;
	    	$cat_id=$data->data->FINC_TXN_EX_CA_ID;
	    	$title=$data->data->FINC_TXN_EX_TITLE;
	    	$desc=$data->data->FINC_TXN_EX_DESC;
	    	$amount=$data->data->FINC_TXN_EX_AMT;
	    	$date=$data->data->FINC_TXN_EX_DT;
	    	$status=$data->data->FINC_TXN_EX_STATUS;

	    	$sql="SELECT count(FINC_TXN_EX_TITLE) FROM finance_txn_expense WHERE FINC_TXN_EX_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_TXN_EX_TITLE)']!=0){
				$sql="UPDATE finance_txn_expense SET FINC_TXN_EX_CA_ID='$cat_id',FINC_TXN_EX_TITLE='$title',FINC_TXN_EX_DESC='$desc',FINC_TXN_EX_AMT='$amount', FINC_TXN_EX_DT='$date',FINC_TXN_EX_STATUS='$status' WHERE FINC_TXN_EX_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO finance_txn_expense (FINC_TXN_EX_CA_ID,FINC_TXN_EX_TITLE, FINC_TXN_EX_DESC, FINC_TXN_EX_AMT,FINC_TXN_EX_DT,FINC_TXN_EX_STATUS) VALUES ('$cat_id','$title','$desc','$amount','$date','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    	
	    }
	    function getExpense_details($id){
	    	$sql="SELECT * FROM finance_txn_expense where FINC_TXN_EX_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function getAllExpense_details(){
	    	$sql="SELECT * FROM finance_txn_expense";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteExpense($id){
	    	$sql="DELETE FROM finance_txn_expense WHERE FINC_TXN_EX_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // -------------------------------------  Finance Income  ---------------------------------------------------------------

	    public function addIncomeData(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->data->FINC_TXN_IN_ID;
	    	$cat_id=$data->data->FINC_TXN_IN_CA_ID;
	    	$title=$data->data->FINC_TXN_IN_TITLE;
	    	$desc=$data->data->FINC_TXN_IN_DESC;
	    	$amount=$data->data->FINC_TXN_EX_AMT;
	    	$date=$data->data->FINC_TXN_IN_DT;
	    	$status=$data->data->FINC_TXN_IN_STATUS;

	    	$sql="SELECT count(FINC_TXN_IN_TITLE) FROM finance_txn_income WHERE FINC_TXN_IN_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_TXN_IN_TITLE)']!=0){
				$sql="UPDATE finance_txn_income SET FINC_TXN_IN_CA_ID='$cat_id',FINC_TXN_IN_TITLE='$title',FINC_TXN_IN_DESC='$desc',FINC_TXN_IN_AMT='$amount', FINC_TXN_IN_DT='$date',FINC_TXN_IN_STATUS='$status' WHERE FINC_TXN_IN_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO finance_txn_income (FINC_TXN_IN_CA_ID,FINC_TXN_IN_TITLE, FINC_TXN_IN_DESC, FINC_TXN_IN_AMT,FINC_TXN_IN_DT,FINC_TXN_IN_STATUS) VALUES ('$cat_id','$title','$desc','$amount','$date','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    	
	    }
	    function getIncome_details($id){
	    	$sql="SELECT * FROM finance_txn_income where FINC_TXN_IN_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function getAllIncome_details(){
	    	$sql="SELECT * FROM finance_txn_income";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteIncome($id){
	    	$sql="DELETE FROM finance_txn_income WHERE FINC_TXN_IN_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	}
?>