<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class default_model extends CI_Model {
		function fetchEmployeeCategory(){
			$sql="SELECT EMP_C_ID,EMP_C_NAME FROM employee_category";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
		}
	}
?>