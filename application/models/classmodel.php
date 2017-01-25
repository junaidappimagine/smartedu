<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class classmodel extends CI_Model {

		// Acodemics ClassAndBatch Details 
		
		public function addClassAndBatchDetails($value){
			$data = array(
			   'ACA_COU_NAME' => $value['ACA_COU_NAME'],
			   'ACA_COU_SEC_NAME' => $value['ACA_COU_SEC_NAME'],
			   'ACA_COU_CODE' => $value['ACA_COU_CODE'],
			   'ACA_COU_GRADE_TYPE' => $value['ACA_COU_GRADE_TYPE'],
			   'ACA_COU_ELECTIVE_SEL_YN' => $value['ACA_COU_ELECTIVE_SEL_YN'],
			   'ACA_COU_CRT_USER_ID' => $value['ACA_COU_CRT_USER_ID']
			);
			$this->db->insert('Acodemics_course_details', $data); 
			$cls_id= $this->db->insert_id();
			if(!empty($cls_id)){
				$data = array(
				   'ACA_BAT_COU_ID' => $cls_id,
				   'ACA_BAT_NAME' => $value['ACA_BAT_NAME'],
				   'ACA_BAT_START_DT' => $value['ACA_BAT_START_DT'],
				   'ACA_BAT_END_DT' => $value['ACA_BAT_END_DT'],
				   'ACA_BAT_CRT_USER_ID' => $value['ACA_COU_CRT_USER_ID']
				);
				$this->db->insert('Acodemics_batch_details', $data); 
				$adm_id= $this->db->insert_id();
				return $cls_id;
			}
	    }
		
		public function EditClassDetails($id){
			$data = array(
			   'ACA_COU_NAME' => $this->input->post('ACA_COU_NAME'),
			   'ACA_COU_SEC_NAME' => $this->input->post('ACA_COU_SEC_NAME'),
			   'ACA_COU_CODE' => $this->input->post('ACA_COU_CODE'),
			   'ACA_COU_GRADE_TYPE' => $this->input->post('ACA_COU_GRADE_TYPE'),
			   'ACA_COU_ELECTIVE_SEL_YN' => $this->input->post('ACA_COU_ELECTIVE_SEL_YN'),
			   'ACA_COU_UPD_USER_ID' => $this->input->post('ACA_COU_UPD_USER_ID')
			);
			$this->db->where('ACA_COU_ID', $id);
			$this->db->update('Acodemics_course_details', $data); 
			return true;
		}
		
		public function getClassAndBatchDetailsAll(){
			$sql="SELECT * FROM Acodemics_course_details,Acodemics_batch_details where ACA_COU_ID=ACA_BAT_COU_ID";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function getClassAndBatchDetails($id){
			$sql="SELECT * FROM Acodemics_course_details,Acodemics_batch_details where (ACA_COU_ID='$id' AND ACA_BAT_COU_ID='$id')";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function getClassDetails($id){
			$sql="SELECT * FROM Acodemics_course_details WHERE ACA_COU_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		public function getClassDetailsAll(){
			$sql="SELECT * FROM Acodemics_course_details";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function getStudent(){
			$sql="SELECT * FROM `Acodemics_course_details`";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
	}
?>