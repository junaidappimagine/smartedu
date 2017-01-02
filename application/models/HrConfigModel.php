<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class hrConfigModel extends CI_Model {

		// Employee category 
		public function addEmployeeCategory(){
	    	$id=$this->input->post('id');
	    	$name=$this->input->post('name');
	    	$prefix=$this->input->post('prefix');
	    	$active_yn=$this->input->post('status');
	    	$sql="SELECT count(EMP_C_NAME) FROM employee_category WHERE EMP_C_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_C_NAME)']!=0){
				$sql="UPDATE employee_category SET EMP_C_NAME='$name',EMP_C_PREFIX='$prefix',EMP_C_ACTIVE_YN='$active_yn' WHERE EMP_C_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO employee_category (EMP_C_NAME, EMP_C_PREFIX, EMP_C_ACTIVE_YN) VALUES ('$name','$prefix','$active_yn')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function deleteCategory($id){
	    	$sql="DELETE FROM employee_category WHERE EMP_C_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	    function getCategory_details($id){
	    	$sql="SELECT * FROM employee_category where EMP_C_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }

	    // ---------------------------------------- Employee department ---------------------------------------------------

	    function addDepartment_Details(){
	    	$id=$this->input->post('dept_id');
	    	$name=$this->input->post('dept_name');
	    	$code=$this->input->post('dept_code');
	    	$status=$this->input->post('dept_status');
	    	$sql="SELECT count(EMP_D_NAME) FROM employee_department WHERE EMP_D_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_D_NAME)']!=0){
				$sql="UPDATE employee_department SET EMP_D_NAME='$name',EMP_D_CODE='$code',EMP_D_STATUS='$status' WHERE EMP_D_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO employee_department (EMP_D_NAME, EMP_D_CODE, EMP_D_STATUS) VALUES ('$name','$code','$status')";
				$this->db->query($sql);
				return true;
			}
	    }
	    function fetchDaprtment_Details($id){
	    	$sql="SELECT * FROM employee_department where EMP_D_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteDepartment($id){
	    	$sql="DELETE FROM employee_department WHERE EMP_D_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ---------------------------------------------- Employee Position ----------------------------------------------------

	    function addPosition_Details(){
			$id=$this->input->post('pos_id');
			$cat_id=$this->input->post('cat_id');
	    	$name=$this->input->post('pos_name');
	    	$status=$this->input->post('pos_status');
	    	$sql="SELECT count(EMP_P_NAME) FROM employee_position WHERE EMP_P_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_P_NAME)']!=0){
				$sql="UPDATE employee_position SET EMP_P_CATEGORY_ID='$cat_id',EMP_P_NAME='$name',EMP_P_ACTIVE_YN='$status' WHERE EMP_P_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO employee_position (EMP_P_CATEGORY_ID, EMP_P_NAME, EMP_P_ACTIVE_YN) VALUES ('$cat_id','$name','$status')";
				$this->db->query($sql);
				return true;
			}

	    }
	    function deletePosition($id){
	    	$sql="DELETE FROM employee_position WHERE EMP_P_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	    function fetchAllPosition_Details($id){
	    	$sql="SELECT * FROM employee_position where EMP_P_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }


	    // ---------------------------------------- Employee grade -----------------------------------------------------

	    function addGrade_Details(){
			$id=$this->input->post('id');
			$grade_name=$this->input->post('grade_name');
	    	$priority=$this->input->post('priority');
	    	$maxday=$this->input->post('max_day');
	    	$maxweek=$this->input->post('max_week');
	    	$status=$this->input->post('status');
	    	$sql="SELECT count(EMP_G_NAME) FROM employee_grade WHERE EMP_G_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_G_NAME)']!=0){
				$sql="UPDATE employee_grade SET EMP_G_NAME='$grade_name',EMP_G_PRIORITY='$priority',EMP_G_MAX_DAY='$maxday' ,EMP_G_MAX_WEEK='$maxweek',EMP_G_ACTIVE_YN='$status' WHERE EMP_G_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO employee_grade (EMP_G_NAME, EMP_G_PRIORITY, EMP_G_MAX_DAY,EMP_G_MAX_WEEK,EMP_G_ACTIVE_YN) VALUES ('$grade_name','$priority','$maxday','$maxweek','$status')";
				$this->db->query($sql);
				return true;
			}
	    }
	    function fetchGrade_Details($id){
	    	$sql="SELECT * FROM employee_grade where EMP_G_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteGrade($id){
	    	$sql="DELETE FROM employee_grade WHERE EMP_G_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ----------------------------------------- leave Type ------------------------------------------------------

	    function addleaveType(){
	    	$id=$this->input->post('id');
			$name=$this->input->post('l_name');
	    	$leave_code=$this->input->post('l_code');
	    	$leave_count=$this->input->post('l_count');
	    	$valid_from=$this->input->post('val_from');
	    	$leave_bal=$this->input->post('l_bal');
	    	$no_leave_count=$this->input->post('bal_count');
	    	$add_leave=$this->input->post('add_leave');
	    	$status=$this->input->post('l_status');
	    	$sql="SELECT count(EMP_L_NAME) FROM employee_leave_type WHERE EMP_L_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_L_NAME)']!=0){
				$sql="UPDATE employee_leave_type SET EMP_L_NAME='$name',EMP_L_CODE='$leave_code',EMP_L_COUNT='$leave_count' ,EMP_L_VALID_FROM='$valid_from',EMP_L_ALLOW_LEAVE_BAL='$leave_bal',EMP_L_ALLOW_BAL_COUNT='$no_leave_count',EMP_L_ADDI_LEAVE_DED_YN='$add_leave',EMP_L_STATUS='$status' WHERE EMP_L_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO employee_leave_type (EMP_L_NAME,EMP_L_CODE,EMP_L_COUNT,EMP_L_VALID_FROM,EMP_L_ALLOW_LEAVE_BAL,EMP_L_ALLOW_BAL_COUNT,EMP_L_ADDI_LEAVE_DED_YN,EMP_L_STATUS) VALUES ('$name','$leave_code','$leave_count','$valid_from','$leave_bal','$no_leave_count','$add_leave','$status')";
				$this->db->query($sql);
				return true;
			}
	    }
	    function fetchLeaveType_Details($id){
	    	$sql="SELECT * FROM employee_leave_type where EMP_L_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteLeaveType($id){
	    	$sql="DELETE FROM employee_leave_type WHERE EMP_L_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------------------ Bank details ----------------------------------------------------------

	    function addBankDetails(){
			$id=$this->input->post('bank_id');
	    	$name=$this->input->post('bank_name');
	    	$status=$this->input->post('bank_status');
	    	$sql="SELECT count(EMP_P_NAME) FROM employee_bank_details WHERE EMP_BNK_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_BNK_NAME)']!=0){
				$sql="UPDATE employee_bank_details SET EMP_BNK_NAME='$name',EMP_BNK_ACTIVE_YN='$status' WHERE EMP_BNK_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO employee_bank_details (EMP_BNK_NAME,EMP_BNK_ACTIVE_YN) VALUES ('$name','$status')";
				$this->db->query($sql);
				return true;
			}
	    }
	    function fetchBank_Details($id){
	    	$sql="SELECT * FROM employee_bank_details where EMP_BNK_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteBankDetails($id){
	    	$sql="DELETE FROM employee_bank_details WHERE EMP_BNK_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	}
?>