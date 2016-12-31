<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class HrConfigModel extends CI_Model {

		// Employee category 
		public function addEmployeeCategory(){
	    	// $id=$_POST['id'];
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
	    function fetchCategoryDetails(){
			$sql="SELECT * FROM employee_category order by EMP_C_ID";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
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
	  //   function updateCategory($id,$name,$prefix,$status){
	  //   	$data = array(  
			// 	'EMP_C_NAME' => $name,  
			// 	'EMP_C_PREFIX' => $prefix,
			// 	'EMP_C_ACTIVE_YN' => $status
			// );  
			// $this->db->where('EMP_C_ID', $id);  
			// $this->db->update('employee_category', $data);
			// return true;
	  //   }

	    // ---------------------------------------- Employee department ---------------------------------------------------

	    function addDepartment_Details(){
	    	$name=$_POST['name'];
	    	$code=$_POST['code'];
	    	$status=$_POST['status'];
	    	$sql="INSERT INTO employee_department (EMP_D_NAME, EMP_D_CODE, EMP_D_STATUS) VALUES ('$name','$code','$status')";
			$this->db->query($sql);
			return true;
	    }
	    function fetchDepartment_Details(){
			$sql="SELECT * FROM employee_department";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteDepartment($id){
	    	$sql="DELETE FROM employee_department WHERE EMP_D_ID='$id'";
	    	return $result = $this->db->query($sql);
	    }
	    function fetchPerticularDaprtment_Details($id){
	    	$sql="SELECT * FROM employee_department where EMP_D_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function updateDepartment($id,$name,$code,$status){
	    	$data = array(  
				'EMP_D_NAME' => $name,  
				'EMP_D_CODE' => $code,
				'EMP_D_STATUS' => $status
			);
			// echo "<pre>";
			// print_r($data);exit;
			$this->db->where('EMP_D_ID', $id);  
			$this->db->update('employee_department', $data);
			return true;
	    }

	    // ---------------------------------------------- Employee Position ----------------------------------------------------

	    function addPosition_Details(){
	    	$cat_id=$_POST['EMP_P_CATEGORY_ID'];
	    	$pos_name=$_POST['EMP_P_NAME'];
	    	$status=$_POST['EMP_P_ACTIVE_YN'];
	    	$sql="INSERT INTO employee_position (EMP_P_CATEGORY_ID, EMP_P_NAME, EMP_P_ACTIVE_YN) VALUES ('$cat_id','$pos_name','$status')";
			$this->db->query($sql);
			return true;
	    }
	    function fetchAllPosition_Details(){
			$sql="SELECT * FROM employee_position";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deletePosition($id){
	    	$sql="DELETE FROM employee_position WHERE EMP_P_ID='$id'";
	    	return $result = $this->db->query($sql);
	    }
	    function fetchPerticularPosition_Details($id){
	    	$sql="SELECT * FROM employee_position where EMP_P_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function updatePosition($id,$name,$cat_code,$status){
	    	$data = array(  
	    		'EMP_P_CATEGORY_ID' => $cat_code,
				'EMP_P_NAME' => $name,  
				'EMP_P_ACTIVE_YN' => $status
			);  
			$this->db->where('EMP_P_ID', $id);  
			$this->db->update('employee_position', $data);
			return true;
	    }


	    // ---------------------------------------- Employee grade -----------------------------------------------------

	    function addGrade_Details(){
	    	$name=$_POST['grade_name'];
	    	$priority=$_POST['priority'];
	    	$maxday=$_POST['max_day'];
	    	$maxweek=$_POST['max_week'];
	    	$status=$_POST['status'];
	    	$sql="INSERT INTO employee_grade (EMP_G_NAME, EMP_G_PRIORITY, EMP_G_MAX_DAY,EMP_G_MAX_WEEK,EMP_G_ACTIVE_YN) VALUES ('$name','$priority','$maxday','$maxweek','$status')";
			$this->db->query($sql);
			return true;
	    }
	    function fetchGrade_Details(){
			$sql="SELECT * FROM employee_grade";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    
	    function fetchPerticularGrade_Details($id){
	    	$sql="SELECT * FROM employee_grade where EMP_G_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function updateGrade($id,$name,$priority,$day,$week,$status){
	    	$data = array(  
				'EMP_G_NAME' => $name,
				'EMP_G_PRIORITY' => $priority,
				'EMP_G_MAX_DAY' => $day,
				'EMP_G_MAX_WEEK' => $week,
				'EMP_G_ACTIVE_YN' => $status,
			);
			$this->db->where('EMP_G_ID', $id);  
			$this->db->update('employee_grade', $data);
			return true;
	    }
	    function deleteGrade($id){
	    	$sql="DELETE FROM employee_grade WHERE EMP_G_ID='$id'";
	    	return $result = $this->db->query($sql);
	    }

	    // ----------------------------------------- leave Type ------------------------------------------------------

	    function addleaveType(){
	    	$name=$_POST['EMP_L_NAME'];
	    	$leave_code=$_POST['EMP_L_CODE'];
	    	$leave_count=$_POST['EMP_L_COUNT'];
	    	$valid_from=$_POST['EMP_L_VALID_FROM'];
	    	$leave_bal=$_POST['EMP_L_ALLOW_LEAVE_BAL'];
	    	$no_leave_count=$_POST['EMP_L_ALLOW_BAL_COUNT'];
	    	$add_leave=$_POST['EMP_L_ADDI_LEAVE_DED_YN'];
	    	$status=$_POST['EMP_L_STATUS'];
	    	$sql="INSERT INTO employee_leave_type (EMP_L_NAME,EMP_L_CODE,EMP_L_COUNT,EMP_L_VALID_FROM,EMP_L_ALLOW_LEAVE_BAL,EMP_L_ALLOW_BAL_COUNT,EMP_L_ADDI_LEAVE_DED_YN,EMP_L_STATUS) VALUES ('$name','$leave_code','$leave_count','$valid_from','$leave_bal','$no_leave_count','$add_leave','$status')";
			$this->db->query($sql);
			return true;
	    }
	    function fetchLeaveType_Details(){
			$sql="SELECT * FROM employee_leave_type";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    
	    function fetchPerticularLeaveType_Details($id){
	    	$sql="SELECT * FROM employee_leave_type where EMP_L_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function updateLeaveType($id,$name,$code,$count,$valid_from,$leave_bal,$bal_count,$add_leave,$status){
	    	$data = array(		    	
				'EMP_L_NAME' => $name,
				'EMP_L_CODE' =>  $code,
				'EMP_L_COUNT' =>  $count,
				'EMP_L_VALID_FROM' =>  $valid_from,
				'EMP_L_ALLOW_LEAVE_BAL' =>  $leave_bal,
				'EMP_L_ALLOW_BAL_COUNT' =>  $bal_count,
				'EMP_L_ADDI_LEAVE_DED_YN' =>  $add_leave,
				'EMP_L_STATUS' =>  $status
			);
			$this->db->where('EMP_L_ID', $id);  
			$this->db->update('employee_leave_type', $data);
			return true;
	    }
	    function employeeLeaveType_delete($id){
	    	$sql="DELETE FROM employee_leave_type WHERE EMP_L_ID='$id'";
	    	return $result = $this->db->query($sql);
	    }

	    // ------------------------------------------ Bank details ----------------------------------------------------------

	    function addBankDetails(){
	    	$name=$_POST['EMP_BNK_NAME'];
	    	$status=$_POST['EMP_BNK_ACTIVE_YN'];
	    	$sql="INSERT INTO employee_bank_details (EMP_BNK_NAME,EMP_BNK_ACTIVE_YN) VALUES ('$name','$status')";
			$this->db->query($sql);
			return true;
	    }
	    function fetchAllBankDetails(){
			$sql="SELECT * FROM employee_bank_details";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    
	    function fetchBank_Details($id){
	    	$sql="SELECT * FROM employee_bank_details where EMP_BNK_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function updateBankDetails($id,$name,$active){
	    	$data = array(		    	
				'EMP_BNK_NAME' => $name,
				'EMP_BNK_ACTIVE_YN' =>  $active
			);
			$this->db->where('EMP_BNK_ID', $id);  
			$this->db->update('employee_bank_details', $data);
			return true;
	    }
	    function deleteBankDetails($id){
	    	$sql="DELETE FROM employee_bank_details WHERE EMP_BNK_ID='$id'";
	    	return $result = $this->db->query($sql);
	    }
	}
?>