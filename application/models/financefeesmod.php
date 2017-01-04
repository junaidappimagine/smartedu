<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class financefeesmod extends CI_Model {

		// ------------------------------ Finance Fees -----------------------------------------------------------------
		public function addFeesCategory(){
	    	$id=$this->input->post('FINC_S_CA_ID');
	    	$name=$this->input->post('FINC_S_CA_NAME');
	    	$desc=$this->input->post('FINC_S_CA_DESC');
	    	$batch=$this->input->post('FINC_S_CA_BATCH');

	    	$sql="SELECT count(FINC_S_CA_NAME) FROM finance_setting_category WHERE FINC_S_CA_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_S_CA_NAME)']!=0){
				$sql="UPDATE finance_setting_category SET FINC_S_CA_NAME='$name',FINC_S_CA_DESC='$desc',FINC_S_CA_BATCH='$batch' WHERE FINC_S_CA_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_setting_category (FINC_S_CA_NAME,FINC_S_CA_DESC,FINC_S_CA_BATCH) VALUES ('$name','$desc','$batch')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getFeesCategory($id){
	    	$sql="SELECT * FROM finance_setting_category where FINC_S_CA_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteFeesCategory($id){
	    	$sql="DELETE FROM finance_setting_category WHERE FINC_S_CA_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------ Finance Particular -----------------------------------------------------------------
		public function addParticularData(){
	    	$id=$this->input->post('FINC_S_PA_ID');
	    	$cat_id=$this->input->post('FINC_S_PA_CA_ID');
	    	$name=$this->input->post('FINC_S_PA_NAME');
	    	$desc=$this->input->post('FINC_S_PA_DESC');
	    	$type=$this->input->post('FINC_S_PA_CREATE_TYPE');
	    	$amount=$this->input->post('FINC_S_PA_AMT');
	    	$stu_categ=$this->input->post('FINC_S_PA_STU_CATE');
	    	$adm_no=$this->input->post('FINC_S_PA_ADM_NO');
	    	$batch=$this->input->post('FINC_S_PA_BATCH');

	    	$sql="SELECT count(FINC_S_PA_NAME) FROM finance_setting_perticular WHERE FINC_S_PA_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_S_PA_NAME)']!=0){
				$sql="UPDATE finance_setting_perticular SET FINC_S_PA_CA_ID='$cat_id',FINC_S_PA_NAME='$name',FINC_S_PA_DESC='$desc',FINC_S_PA_CREATE_TYPE='$type',FINC_S_PA_AMT='$amount',FINC_S_PA_STU_CATE='$stu_categ',FINC_S_PA_ADM_NO='$adm_no',FINC_S_PA_BATCH='$batch' WHERE FINC_S_PA_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_setting_perticular (FINC_S_PA_CA_ID,FINC_S_PA_NAME,FINC_S_PA_DESC,FINC_S_PA_CREATE_TYPE,FINC_S_PA_AMT,FINC_S_PA_STU_CATE,FINC_S_PA_ADM_NO,FINC_S_PA_BATCH) VALUES ('$cat_id','$name','$desc','$type','$amount','$stu_categ','$adm_no','$batch')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getFeesParticular($id){
	    	$sql="SELECT * FROM finance_setting_perticular where FINC_S_PA_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteFeesParticular($id){
	    	$sql="DELETE FROM finance_setting_perticular WHERE FINC_S_PA_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------ Finance Fees Discount -----------------------------------------------------------------
		public function addFeesDiscount(){
	    	$id=$this->input->post('FINC_FEE_M_ID');
	    	$cat_id=$this->input->post('FINC_FEE_M_H_ID');
	    	$disc_id=$this->input->post('FINC_FEE_M_DISC_ID');
	    	$type=$this->input->post('FINC_FEE_M_DISC_TYPE');
	    	$name=$this->input->post('FINC_FEE_M_DISC_NAME');
	    	$amount=$this->input->post('FINC_FEE_M_DISC_AMT');
	    	$sql="SELECT count(FINC_FEE_M_DISC_NAME) FROM finance_fees_discount WHERE FINC_FEE_M_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_FEE_M_DISC_NAME)']!=0){
				$sql="UPDATE finance_fees_discount SET FINC_FEE_M_H_ID='$cat_id',FINC_FEE_M_DISC_ID='$disc_id',FINC_FEE_M_DISC_TYPE='$type',FINC_FEE_M_DISC_NAME='$name',FINC_FEE_M_DISC_AMT='$amount' WHERE FINC_FEE_M_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_fees_discount (FINC_FEE_M_H_ID,FINC_FEE_M_DISC_ID,FINC_FEE_M_DISC_TYPE,FINC_FEE_M_DISC_NAME,FINC_FEE_M_DISC_AMT) VALUES ('$cat_id','$disc_id','$type','$name','$amount')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getFeesDiscount($id){
	    	$sql="SELECT * FROM finance_fees_discount where FINC_FEE_M_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteFeesDiscount($id){
	    	$sql="DELETE FROM finance_fees_discount WHERE FINC_FEE_M_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }


	    // ------------------------------ Finance Fees Fine ----------------------------------------------------------
		public function addFeesFine(){
	    	$id=$this->input->post('FINC_S_FI_ID');
	    	$count = count($_POST['FINC_S_FI_DUE_DT']);
	    	$sql="SELECT count(FINC_S_FI_NAME) FROM finance_setting_fine WHERE FINC_S_FI_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_S_FI_NAME)']!=0){
				for($i=0; $i<$count;$i++) {
		    		$data=array(
		    			'FINC_S_FI_NAME'=>$_POST['FINC_S_FI_NAME'],
		    			'FINC_S_FI_DUE_DT'=>$_POST['FINC_S_FI_DUE_DT'][$i],
		    			'FINC_S_FI_AMT'=>$_POST['FINC_S_FI_AMT'][$i],
		    			'FINC_S_FI_MODE_TYPE'=>$_POST['FINC_S_FI_MODE_TYPE'][$i]
		    		);
		    		$this->db->where('FINC_S_FI_ID', $id);
		    		$this->db->update('finance_setting_fine', $data); 
		    	}
		    	
			}else {
				for($i=0; $i<$count;$i++) {
		    		$data=array(
		    			'FINC_S_FI_NAME'=>$_POST['FINC_S_FI_NAME'],
		    			'FINC_S_FI_DUE_DT'=>$_POST['FINC_S_FI_DUE_DT'][$i],
		    			'FINC_S_FI_AMT'=>$_POST['FINC_S_FI_AMT'][$i],
		    			'FINC_S_FI_MODE_TYPE'=>$_POST['FINC_S_FI_MODE_TYPE'][$i]
		    		);
		    		$this->db->insert('finance_setting_fine', $data); 
		    	}
		    	// return true;
			}
			return true;
	    }
	    function getFeesFine($id){
	    	$sql="SELECT * FROM finance_setting_fine where FINC_S_FI_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteFeesFine($id){
	    	$sql="DELETE FROM finance_setting_fine WHERE FINC_S_FI_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }


	    // ------------------------------ Finance Fees Schedule ----------------------------------------------------------
		public function addScheduleFees(){
	    	$id=$this->input->post('FINC_SCH_ID');
	    	$fees_catid=$this->input->post('FINC_SCH_FEE_CA_ID');
	    	$name=$this->input->post('FINC_SCH_NAME');
	    	$fine_id=$this->input->post('FINC_SCH_FI_ID');
	    	$start_date=$this->input->post('FINC_SCH_START_DT');
	    	$end_date=$this->input->post('FINC_SCH_END_DT');
	    	$active=$this->input->post('FINC_SCH_ACTIVE_YN');
	    	$sql="SELECT count(FINC_SCH_NAME) FROM finance_schedule WHERE FINC_SCH_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_SCH_NAME)']!=0){
				$sql="UPDATE finance_schedule SET FINC_SCH_FEE_CA_ID='$fees_catid',FINC_SCH_NAME='$name',FINC_SCH_FI_ID='$fine_id',FINC_SCH_START_DT='$start_date',FINC_SCH_END_DT='$end_date',FINC_SCH_ACTIVE_YN='$active' WHERE FINC_SCH_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_schedule (FINC_SCH_FEE_CA_ID,FINC_SCH_NAME,FINC_SCH_FI_ID,FINC_SCH_START_DT,FINC_SCH_END_DT,FINC_SCH_ACTIVE_YN) VALUES ('$fees_catid','$name','$fine_id','$start_date','$end_date','$active')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getScheduleFees($id){
	    	$sql="SELECT * FROM finance_schedule where FINC_SCH_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteSheduleFees($id){
	    	$sql="DELETE FROM finance_schedule WHERE FINC_SCH_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------ Finance Refund ----------------------------------------------------------
		public function addRefundData(){
	    	$id=$this->input->post('FINC_RF_ID');
	    	$coll_id=$this->input->post('FINC_RF_SCH_COLL_ID');
	    	$rf_name=$this->input->post('FINC_RF_NAME');
	    	$rf_valid=$this->input->post('FINC_RF_VALIDITY');
	    	$rf_type=$this->input->post('FINC_RF_TYPE');
	    	$rf_value=$this->input->post('FINC_RF_VALUE');
	    	$sql="SELECT count(FINC_RF_NAME) FROM finance_refund WHERE FINC_RF_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_RF_NAME)']!=0){
				$sql="UPDATE finance_refund SET FINC_RF_SCH_COLL_ID='$coll_id',FINC_RF_NAME='$rf_name',FINC_RF_VALIDITY='$rf_valid',FINC_RF_TYPE='$rf_type',FINC_RF_VALUE='$rf_value' WHERE FINC_RF_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_refund (FINC_RF_SCH_COLL_ID,FINC_RF_NAME,FINC_RF_VALIDITY,FINC_RF_TYPE,FINC_RF_VALUE) VALUES ('$coll_id','$rf_name','$rf_valid','$rf_type','$rf_value')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getRefundData($id){
	    	$sql="SELECT * FROM finance_refund where FINC_RF_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteRefund($id){
	    	$sql="DELETE FROM finance_refund WHERE FINC_RF_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------ Finance Applied Refund ----------------------------------------------------------
		public function applyRefundData(){
	    	$id=$this->input->post('FINC_AP_RF_ID');
	    	$rf_coll_id=$this->input->post('FINC_AP_RF_SCH_COLL_ID');
	    	$re_std_name=$this->input->post('FINC_AP_RF_STU_NAME');
	    	$adm_no=$this->input->post('FINC_AP_RF_ADM_NO');
	    	$rf_amount=$this->input->post('FINC_AP_RF_AMT');
	    	$rf_date=$this->input->post('FINC_AP_RF_DATE');
	    	$refund_by=$this->input->post('FINC_AP_RF_REFUNDED_BY');

	    	$sql="SELECT count(FINC_AP_RF_STU_NAME) FROM finance_applied_refund WHERE FINC_AP_RF_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_AP_RF_STU_NAME)']!=0){
				$sql="UPDATE finance_applied_refund SET FINC_AP_RF_SCH_COLL_ID='$rf_coll_id',FINC_AP_RF_STU_NAME='$re_std_name',FINC_AP_RF_ADM_NO='$adm_no',FINC_AP_RF_AMT='$rf_amount',FINC_AP_RF_DATE='$rf_date',FINC_AP_RF_REFUNDED_BY='$refund_by' WHERE FINC_AP_RF_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_applied_refund (FINC_AP_RF_SCH_COLL_ID,FINC_AP_RF_STU_NAME,FINC_AP_RF_ADM_NO,FINC_AP_RF_AMT,FINC_AP_RF_DATE,FINC_AP_RF_REFUNDED_BY) VALUES ('$rf_coll_id','$re_std_name','$adm_no','$rf_type','$rf_amount','$rf_date','$refund_by')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getApplyRefundData($id){
	    	$sql="SELECT * FROM finance_applied_refund where FINC_AP_RF_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteApplyRefund($id){
	    	$sql="DELETE FROM finance_applied_refund WHERE FINC_AP_RF_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------ Finance Fees Collection ----------------------------------------------------------
		public function addFeeCollection(){
	    	$id=$this->input->post('FINC_FEE_H_ID');
	    	$stu_id=$this->input->post('FINC_FEE_H_STU_ID');
	    	$adm_no=$this->input->post('FINC_FEE_H_STU_ADM_NO');
	    	$roll_no=$this->input->post('FINC_FEE_H_STU_ROLL_NO');
	    	$st_name=$this->input->post('FINC_FEE_H_STU_NAME');
	    	$batch_id=$this->input->post('FINC_FEE_H_BATCH_ID');
	    	$cat_id=$this->input->post('FINC_FEE_H_CATE_ID');
	    	$tot_fees=$this->input->post('FINC_FEE_H_TOTAL_FEES');
	    	$tot_disc=$this->input->post('FINC_FEE_H_TOTAL_DISC');
	    	$tot_fine=$this->input->post('FINC_FEE_H_TOTAL_FINE');
	    	$pay_mod=$this->input->post('FINC_FEE_H_PAY_MODE');
	    	$due_date=$this->input->post('FINC_FEE_H_DUE_AMT');
	    	$amount_paid=$this->input->post('FINC_FEE_H_AMT_PAID');
	    	$ref_no=$this->input->post('FINC_FEE_H_REF_NO');
	    	$pay_date=$this->input->post('FINC_FEE_H_PAY_DT');
	    	$status=$this->input->post('FINC_FEE_H_STATUS_FEE');

	    	$sql="SELECT count(FINC_FEE_H_STU_NAME) FROM finance_fees_head WHERE FINC_FEE_H_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_FEE_H_STU_NAME)']!=0){
				$sql="UPDATE finance_fees_head SET FINC_FEE_H_STU_ID='$stu_id',FINC_FEE_H_STU_ADM_NO='$adm_no',FINC_FEE_H_STU_ROLL_NO='$roll_no',FINC_FEE_H_STU_NAME='$st_name',FINC_FEE_H_BATCH_ID='$batch_id',FINC_FEE_H_CATE_ID='$cat_id',FINC_FEE_H_TOTAL_FEES='$tot_fees',FINC_FEE_H_TOTAL_DISC='$tot_disc',FINC_FEE_H_TOTAL_FINE='$tot_fine',FINC_FEE_H_PAY_MODE='$pay_mod',FINC_FEE_H_DUE_AMT='$due_date',FINC_FEE_H_AMT_PAID='$amount_paid',FINC_FEE_H_REF_NO='$ref_no',FINC_FEE_H_PAY_DT='$pay_date',FINC_FEE_H_STATUS_FEE='$status' WHERE FINC_FEE_H_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_fees_head (FINC_FEE_H_STU_ID,FINC_FEE_H_STU_ADM_NO,FINC_FEE_H_STU_ROLL_NO,FINC_FEE_H_STU_NAME,FINC_FEE_H_BATCH_ID,FINC_FEE_H_CATE_ID,FINC_FEE_H_TOTAL_FEES,FINC_FEE_H_TOTAL_DISC,FINC_FEE_H_TOTAL_FINE,FINC_FEE_H_PAY_MODE,FINC_FEE_H_DUE_AMT,FINC_FEE_H_AMT_PAID,FINC_FEE_H_REF_NO,FINC_FEE_H_PAY_DT,FINC_FEE_H_STATUS_FEE) VALUES ('$stu_id','$adm_no','$roll_no','$st_name','$batch_id','$cat_id','$tot_fees','$tot_disc','$tot_fine','$pay_mod','$due_date','$amount_paid','$ref_no','$pay_date','$status')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getFeeCollection($id){
	    	$sql="SELECT * FROM finance_fees_head where FINC_FEE_H_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteFeeCollection($id){
	    	$sql="DELETE FROM finance_fees_head WHERE FINC_FEE_H_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	}
?>