<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class hrConfigModel extends CI_Model {

		// Employee category 
		public function addEmployeeCategory(){
			$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_C_ID;
	    	$name=$data->EMP_C_NAME;
	    	$prefix=$data->EMP_C_PREFIX;
	    	$active_yn=$data->EMP_C_ACTIVE_YN;
	    	$sql="SELECT count(EMP_C_NAME) FROM employee_category WHERE EMP_C_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_C_NAME)']!=0){
				$sql="UPDATE employee_category SET EMP_C_NAME='$name',EMP_C_PREFIX='$prefix',EMP_C_ACTIVE_YN='$active_yn' WHERE EMP_C_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_category (EMP_C_NAME, EMP_C_PREFIX, EMP_C_ACTIVE_YN) VALUES ('$name','$prefix','$active_yn')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
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

	    function getAllCategory_details(){
	    	$sql="SELECT * FROM employee_category";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }

	    // ---------------------------------------- Employee department ---------------------------------------------------

	    function addDepartment_Details(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_D_ID;
	    	$name=$data->EMP_D_NAME;
	    	$code=$data->EMP_D_CODE;
	    	$status=$data->EMP_D_STATUS;

	    	$sql="SELECT count(EMP_D_NAME) FROM employee_department WHERE EMP_D_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_D_NAME)']!=0){
				$sql="UPDATE employee_department SET EMP_D_NAME='$name',EMP_D_CODE='$code',EMP_D_STATUS='$status' WHERE EMP_D_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_department (EMP_D_NAME, EMP_D_CODE, EMP_D_STATUS) VALUES ('$name','$code','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    }
	    function fetchDaprtment_Details($id){
	    	$sql="SELECT * FROM employee_department where EMP_D_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchAllDaprtment_Details(){
	    	$sql="SELECT * FROM employee_department";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteDepartment($id){
	    	$sql="DELETE FROM employee_department WHERE EMP_D_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ---------------------------------------------- Employee Position ----------------------------------------------------

	    function addPosition_Details(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_P_ID;
	    	$name=$data->EMP_P_NAME;
	    	$cat_id=$data->EMP_P_CATEGORY_ID->name;
	    	$status=$data->EMP_P_ACTIVE_YN;

	    	$sql="SELECT count(EMP_P_NAME) FROM employee_position WHERE EMP_P_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_P_NAME)']!=0){
				$sql="UPDATE employee_position SET EMP_P_CATEGORY_ID='$cat_id',EMP_P_NAME='$name',EMP_P_ACTIVE_YN='$status' WHERE EMP_P_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_position (EMP_P_CATEGORY_ID, EMP_P_NAME, EMP_P_ACTIVE_YN) VALUES ('$cat_id','$name','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}

	    }
	    function deletePosition($id){
	    	$sql="DELETE FROM employee_position WHERE EMP_P_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	    function fetchAllPosition_Details(){
	    	$sql="SELECT * FROM employee_position";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchPosition_Details($id){
	    	$sql="SELECT * FROM employee_position where EMP_P_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }


	    // ---------------------------------------- Employee grade -----------------------------------------------------

	    function addGrade_Details(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_G_ID;
	    	$grade_name=$data->EMP_G_NAME;
	    	$priority=$data->EMP_G_PRIORITY;
	    	$maxday=$data->EMP_G_MAX_DAY;
	    	$maxweek=$data->EMP_G_MAX_WEEK;
	    	$status=$data->EMP_G_ACTIVE_YN;
	    	$sql="SELECT count(EMP_G_NAME) FROM employee_grade WHERE EMP_G_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_G_NAME)']!=0){
				$sql="UPDATE employee_grade SET EMP_G_NAME='$grade_name',EMP_G_PRIORITY='$priority',EMP_G_MAX_DAY='$maxday' ,EMP_G_MAX_WEEK='$maxweek',EMP_G_ACTIVE_YN='$status' WHERE EMP_G_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_grade (EMP_G_NAME, EMP_G_PRIORITY, EMP_G_MAX_DAY,EMP_G_MAX_WEEK,EMP_G_ACTIVE_YN) VALUES ('$grade_name','$priority','$maxday','$maxweek','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    }
	    function fetchGrade_Details($id){
	    	$sql="SELECT * FROM employee_grade where EMP_G_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchAllGrade_Details(){
	    	$sql="SELECT * FROM employee_grade";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteGrade($id){
	    	$sql="DELETE FROM employee_grade WHERE EMP_G_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ----------------------------------------- leave Type ------------------------------------------------------

	    function addleaveType(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_L_ID;
	    	$name=$data->EMP_L_NAME;
	    	$leave_code=$data->EMP_L_CODE;
	    	$leave_count=$data->EMP_L_COUNT;
	    	$valid_from=$data->EMP_L_VALID_FROM;
	    	$leave_bal=$data->EMP_L_ALLOW_LEAVE_BAL;
	    	$no_leave_count=$data->EMP_L_ALLOW_BAL_COUNT;
	    	$add_leave=$data->EMP_L_ADDI_LEAVE_DED_YN;
	    	$status=$data->EMP_L_STATUS;
	    	$sql="SELECT count(EMP_L_NAME) FROM employee_leave_type WHERE EMP_L_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_L_NAME)']!=0){
				$sql="UPDATE employee_leave_type SET EMP_L_NAME='$name',EMP_L_CODE='$leave_code',EMP_L_COUNT='$leave_count' ,EMP_L_VALID_FROM='$valid_from',EMP_L_ALLOW_LEAVE_BAL='$leave_bal',EMP_L_ALLOW_BAL_COUNT='$no_leave_count',EMP_L_ADDI_LEAVE_DED_YN='$add_leave',EMP_L_STATUS='$status' WHERE EMP_L_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_leave_type (EMP_L_NAME,EMP_L_CODE,EMP_L_COUNT,EMP_L_VALID_FROM,EMP_L_ALLOW_LEAVE_BAL,EMP_L_ALLOW_BAL_COUNT,EMP_L_ADDI_LEAVE_DED_YN,EMP_L_STATUS) VALUES ('$name','$leave_code','$leave_count','$valid_from','$leave_bal','$no_leave_count','$add_leave','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    }
	    function fetchLeaveType_Details($id){
	    	$sql="SELECT * FROM employee_leave_type where EMP_L_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchAllLeaveType_Details(){
	    	$sql="SELECT * FROM employee_leave_type";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteLeaveType($id){
	    	$sql="DELETE FROM employee_leave_type WHERE EMP_L_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ------------------------------------------ Bank details ----------------------------------------------------------

	    function addBankDetails(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_BNK_ID;
	    	$name=$data->EMP_BNK_NAME;
	    	$status=$data->EMP_BNK_ACTIVE_YN;

	    	$sql="SELECT count(EMP_BNK_NAME) FROM employee_bank_details WHERE EMP_BNK_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_BNK_NAME)']!=0){
				$sql="UPDATE employee_bank_details SET EMP_BNK_NAME='$name',EMP_BNK_ACTIVE_YN='$status' WHERE EMP_BNK_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_bank_details (EMP_BNK_NAME,EMP_BNK_ACTIVE_YN) VALUES ('$name','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    }
	    function fetchBank_Details($id){
	    	$sql="SELECT * FROM employee_bank_details where EMP_BNK_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchAllBank_Details(){
	    	$sql="SELECT * FROM employee_bank_details";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteBankDetails($id){
	    	$sql="DELETE FROM employee_bank_details WHERE EMP_BNK_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }


	    // --------------------------------------  Working Days  ---------------------------------------------------
	    function addWorkingDays_Details(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_W_ID;
	    	$month=$data->EMP_W_MONTH;
	    	$week=$data->EMP_W_WEEK;

	    	$sql="SELECT count(EMP_W_MONTH) FROM employee_working_days WHERE EMP_W_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_W_MONTH)']!=0){
				$sql="UPDATE employee_working_days SET EMP_W_MONTH='$month',EMP_W_WEEK='$week' WHERE EMP_W_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_working_days (EMP_W_MONTH,EMP_W_WEEK) VALUES ('$month','$week')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    }
	    function fetchAllWorkingDays_Details(){
	    	$sql="SELECT * FROM employee_working_days";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchWorkingDays_Details($id){
	    	$sql="SELECT * FROM employee_working_days where EMP_W_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteWorkingDays($id){
	    	$sql="DELETE FROM employee_working_days WHERE EMP_W_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // -------------------------------------- Employee Additional Details ---------------------------------------------------
	    function addAdditional_Details(){
	    	$data = json_decode(file_get_contents("php://input"));
	    	$id=$data->EMP_ADD_ID;
	    	$name=$data->EMP_ADD_NAME;
	    	$method=$data->EMP_ADD_METHOD;
	    	$mandatory=$data->EMP_ADD_MAND;
	    	$status=$data->EMP_ADD_STATUS;

	    	$sql="SELECT count(EMP_ADD_NAME) FROM employee_additional_details WHERE EMP_ADD_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_ADD_NAME)']!=0){
				$sql="UPDATE employee_additional_details SET EMP_ADD_NAME='$name',EMP_ADD_METHOD='$method',EMP_ADD_MAND='$mandatory',EMP_ADD_STATUS='$status' WHERE EMP_ADD_ID='$id'";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Updated Successfully");
			}else {
				$sql="INSERT INTO employee_additional_details (EMP_ADD_NAME,EMP_ADD_METHOD,EMP_ADD_MAND,EMP_ADD_STATUS) VALUES ('$name','$method','$mandatory','$status')";
				$this->db->query($sql);
				return array('status'=>true, 'message'=>"Record Inserted Successfully");
			}
	    }
	    function fetchAllAdditional_Details(){
	    	$sql="SELECT * FROM employee_additional_details";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function fetchAdditional_Details($id){
	    	$sql="SELECT * FROM employee_additional_details where EMP_ADD_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteAdditionalDetails($id){
	    	$sql="DELETE FROM employee_additional_details WHERE EMP_ADD_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	}
?>