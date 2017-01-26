<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class hrConfigModel extends CI_Model {

		// Employee category 
		public function addEmployeeCategory($value){
			$id=$value['EMP_C_ID'];
	    	$sql="SELECT count(EMP_C_NAME) FROM employee_category WHERE EMP_C_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_C_NAME)']!=0){
				$data = array(
				   'EMP_C_NAME' => $value['EMP_C_NAME'],
				   'EMP_C_PREFIX' => $value['EMP_C_PREFIX'],
				   'EMP_C_ACTIVE_YN' => $value['EMP_C_ACTIVE_YN']				);
				$this->db->where('EMP_C_ID', $id);
				$this->db->update('employee_category', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_C_ID'=>$id);
			}else {
				$data = array(
				   'EMP_C_NAME' => $value['EMP_C_NAME'],
				   'EMP_C_PREFIX' => $value['EMP_C_PREFIX'],
				   'EMP_C_ACTIVE_YN' => $value['EMP_C_ACTIVE_YN']
				);
				$this->db->insert('employee_category', $data);
				$emp_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_C_ID'=>$emp_id);
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
	    	$id=$value['EMP_D_ID'];
	    	$sql="SELECT count(EMP_D_NAME) FROM employee_department WHERE EMP_D_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_D_NAME)']!=0){
				$data = array(
				   'EMP_D_NAME' => $value['EMP_D_NAME'],
				   'EMP_D_CODE' => $value['EMP_D_CODE'],
				   'EMP_D_STATUS' => $value['EMP_D_STATUS']				);
				$this->db->where('EMP_D_ID', $id);
				$this->db->update('employee_department', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_D_ID'=>$id);
			}else {
				$data = array(
				   'EMP_D_NAME' => $value['EMP_D_NAME'],
				   'EMP_D_CODE' => $value['EMP_D_CODE'],
				   'EMP_D_STATUS' => $value['EMP_D_STATUS']
				);
				$this->db->insert('employee_department', $data);
				$dept_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_D_ID'=>$dept_id);
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

	    function addPosition_Details($value){
	    	$id=$value['EMP_P_ID'];
	    	$sql="SELECT count(EMP_P_NAME) FROM employee_position WHERE EMP_P_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_P_NAME)']!=0){
				$data = array(
				   'EMP_P_NAME' => $value['EMP_P_NAME'],
				   'EMP_P_CATEGORY_ID' => $value['EMP_P_CATEGORY_ID'],
				   'EMP_P_ACTIVE_YN' => $value['EMP_P_ACTIVE_YN']				
				);
				$this->db->where('EMP_P_ID', $id);
				$this->db->update('employee_position', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_P_ID'=>$id);
			}else {
				$data = array(
				   'EMP_P_NAME' => $value['EMP_P_NAME'],
				   'EMP_P_CATEGORY_ID' => $value['EMP_P_CATEGORY_ID'],
				   'EMP_P_ACTIVE_YN' => $value['EMP_P_ACTIVE_YN']
				);
				$this->db->insert('employee_position', $data);
				$posi_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_P_ID'=>$posi_id);
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

	    function addGrade_Details($value){
	    	$id=$value['EMP_G_ID'];
	    	$sql="SELECT count(EMP_G_NAME) FROM employee_grade WHERE EMP_G_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_G_NAME)']!=0){
				$data = array(
				   'EMP_G_NAME' => $value['EMP_G_NAME'],
				   'EMP_G_PRIORITY' => $value['EMP_G_PRIORITY'],
				   'EMP_G_MAX_DAY' => $value['EMP_G_MAX_DAY'],
				   'EMP_G_MAX_WEEK' => $value['EMP_G_MAX_WEEK'],
				   'EMP_G_ACTIVE_YN' => $value['EMP_G_ACTIVE_YN']			
				);
				$this->db->where('EMP_G_ID', $id);
				$this->db->update('employee_grade', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_G_ID'=>$id);
			}else {
				$data = array(
				   'EMP_G_NAME' => $value['EMP_G_NAME'],
				   'EMP_G_PRIORITY' => $value['EMP_G_PRIORITY'],
				   'EMP_G_MAX_DAY' => $value['EMP_G_MAX_DAY'],
				   'EMP_G_MAX_WEEK' => $value['EMP_G_MAX_WEEK'],
				   'EMP_G_ACTIVE_YN' => $value['EMP_G_ACTIVE_YN']
				);
				$this->db->insert('employee_grade', $data);
				$grade_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_G_ID'=>$grade_id);
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

	    function addleaveType($value){
	    	$id=$value['EMP_L_ID'];
	    	$sql="SELECT count(EMP_L_NAME) FROM employee_leave_type WHERE EMP_L_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_L_NAME)']!=0){
				$data = array(
				   'EMP_L_NAME' => $value['EMP_L_NAME'],
				   'EMP_L_CODE' => $value['EMP_L_CODE'],
				   'EMP_L_COUNT' => $value['EMP_L_COUNT'],
				   'EMP_L_VALID_FROM' => $value['EMP_L_VALID_FROM'],
				   'EMP_L_ALLOW_LEAVE_BAL' => $value['EMP_L_ALLOW_LEAVE_BAL'],
				   'EMP_L_ALLOW_BAL_COUNT' => $value['EMP_L_ALLOW_BAL_COUNT'],
				   'EMP_L_ADDI_LEAVE_DED_YN' => $value['EMP_L_ADDI_LEAVE_DED_YN'],
				   'EMP_L_STATUS' => $value['EMP_L_STATUS']
				);
				$this->db->where('EMP_L_ID', $id);
				$this->db->update('employee_leave_type', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_L_ID'=>$id);
			}else {
				$data = array(
				   'EMP_L_NAME' => $value['EMP_L_NAME'],
				   'EMP_L_CODE' => $value['EMP_L_CODE'],
				   'EMP_L_COUNT' => $value['EMP_L_COUNT'],
				   'EMP_L_VALID_FROM' => $value['EMP_L_VALID_FROM'],
				   'EMP_L_ALLOW_LEAVE_BAL' => $value['EMP_L_ALLOW_LEAVE_BAL'],
				   'EMP_L_ALLOW_BAL_COUNT' => $value['EMP_L_ALLOW_BAL_COUNT'],
				   'EMP_L_ADDI_LEAVE_DED_YN' => $value['EMP_L_ADDI_LEAVE_DED_YN'],
				   'EMP_L_STATUS' => $value['EMP_L_STATUS']
				);
				$this->db->insert('employee_leave_type', $data);
				$leave_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_L_ID'=>$leave_id);
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

	    function addBankDetails($data){
	    	$id=$data['EMP_BNK_ID'];
	    	$sql="SELECT count(EMP_BNK_NAME) FROM employee_bank_details WHERE EMP_BNK_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_BNK_NAME)']!=0){
				$data = array(
				   'EMP_BNK_NAME' => $data['EMP_BNK_NAME'],
				   'EMP_BNK_ACTIVE_YN' => $data['EMP_BNK_ACTIVE_YN']		
				);
				$this->db->where('EMP_BNK_ID', $id);
				$this->db->update('employee_bank_details', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_BNK_ID'=>$id);
			}else {
				$data = array(
				   'EMP_BNK_NAME' => $data['EMP_BNK_NAME'],
				   'EMP_BNK_ACTIVE_YN' => $data['EMP_BNK_ACTIVE_YN']		
				);
				$this->db->insert('employee_bank_details', $data);
				$bank_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_BNK_ID'=>$bank_id);
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
	    function addWorkingDays_Details($data){
	    	$id=$data['EMP_W_ID'];
	    	$sql="SELECT count(EMP_W_MONTH) FROM employee_working_days WHERE EMP_W_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_W_MONTH)']!=0){
				$data = array(
				   'EMP_W_MONTH' => $data['EMP_W_MONTH'],
				   'EMP_W_WEEK' => $data['EMP_W_WEEK']		
				);
				$this->db->where('EMP_W_ID', $id);
				$this->db->update('employee_working_days', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_W_ID'=>$id);
			}else {
				$data = array(
				   'EMP_W_MONTH' => $data['EMP_W_MONTH'],
				   'EMP_W_WEEK' => $data['EMP_W_WEEK']		
				);
				$this->db->insert('employee_working_days', $data);
				$work_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_W_ID'=>$work_id);
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
	    function addAdditional_Details($data){
	    	$id=$data['EMP_ADD_ID'];
	    	$sql="SELECT count(EMP_ADD_NAME) FROM employee_additional_details WHERE EMP_ADD_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(EMP_ADD_NAME)']!=0){
				$data = array(
				   'EMP_ADD_NAME' => $data['EMP_ADD_NAME'],
				   'EMP_ADD_METHOD' => $data['EMP_ADD_METHOD'],		
				   'EMP_ADD_MAND' => $data['EMP_ADD_MAND'],
				   'EMP_ADD_STATUS' => $data['EMP_ADD_STATUS']
				);
				$this->db->where('EMP_ADD_ID', $id);
				$this->db->update('employee_additional_details', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'EMP_ADD_ID'=>$id);
			}else {
				$data = array(
				   'EMP_ADD_NAME' => $data['EMP_ADD_NAME'],
				   'EMP_ADD_METHOD' => $data['EMP_ADD_METHOD'],		
				   'EMP_ADD_MAND' => $data['EMP_ADD_MAND'],
				   'EMP_ADD_STATUS' => $data['EMP_ADD_STATUS']
				);
				$this->db->insert('employee_additional_details', $data);
				$addit_id=$this->db->insert_id();
				return array('status'=>true, 'message'=>"Record Inserted Successfully",'EMP_ADD_ID'=>$addit_id);
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