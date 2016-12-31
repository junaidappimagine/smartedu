<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class HrConfigModel extends CI_Model {

		// Employee category 
		public function addEmployeeCategory(){
	    	$name=$_POST['name'];
	    	$prefix=$_POST['prefix'];
	    	$active_yn=$_POST['status'];
	    	$sql="INSERT INTO employee_category (EMP_C_NAME, EMP_C_PREFIX, EMP_C_ACTIVE_YN) VALUES ('$name','$prefix','$active_yn')";
			$this->db->query($sql);
			return true;
	    }
	    function fetchCategoryDetails(){
			$sql="SELECT * FROM employee_category order by EMP_C_ID";
	    	return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteCategory($id){
	    	$sql="DELETE FROM employee_category WHERE EMP_C_ID='$id'";
	    	return $result = $this->db->query($sql);
	    }
	    function getCategory_details($id){
	    	$sql="SELECT * FROM employee_category where EMP_C_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function updateCategory($id,$name,$prefix,$status){
	    	$data = array(  
				'EMP_C_NAME' => $name,  
				'EMP_C_PREFIX' => $prefix,
				'EMP_C_ACTIVE_YN' => $status
			);  
			$this->db->where('EMP_C_ID', $id);  
			$this->db->update('employee_category', $data);
			return true;
	    }

	    // Employee department

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

	    // Employee Position

	    function addPosition_Details(){
	    	$id=$_POST['EMP_P_CATEGORY_ID'];
	    	$name=$_POST['EMP_P_NAME'];
	    	$status=$_POST['EMP_P_ACTIVE_YN'];
	    	$sql="INSERT INTO employee_position (EMP_P_CATEGORY_ID, EMP_P_NAME, EMP_P_ACTIVE_YN) VALUES ('$id','$name','$status')";
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
	    function updatePosition($id,$name,$prefix,$status){
	    	$data = array(  
				'EMP_D_NAME' => $name,  
				'EMP_D_CODE' => $prefix,
				'EMP_D_STATUS' => $status
			);  
			$this->db->where('EMP_P_ID', $id);  
			$this->db->update('employee_position', $data);
			return true;
	    }


	    // Employee grade

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

	}
?>