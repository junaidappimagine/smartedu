<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class batchmodel extends CI_Model {

		// Acodemics Class And Batch 
		
		public function addBatchDetail(){
			$data = array(
			   'ACA_BAT_COU_ID' => $this->input->post('ACA_BAT_COU_ID'),
			   'ACA_BAT_NAME' => $this->input->post('ACA_BAT_NAME'),
			   'ACA_BAT_START_DT' => $this->input->post('ACA_BAT_START_DT'),
			   'ACA_BAT_END_DT' => $this->input->post('ACA_BAT_END_DT'),
			   'ACA_BAT_IMP_PRE_BAT_SUB_YN' => $this->input->post('ACA_BAT_IMP_PRE_BAT_SUB_YN'),
			   'ACA_BAT_IMP_PRE_BAT_MASTER_FEE_YN' => $this->input->post('ACA_BAT_IMP_PRE_BAT_MASTER_FEE_YN'),
			   'ACA_BAT_CRT_USER_ID' => $this->input->post('ACA_BAT_CRT_USER_ID')
			);
			$this->db->insert('Acodemics_batch_details', $data); 
			$adm_id= $this->db->insert_id();
			return $adm_id;
	    }
		
		public function editBatchDetail($id){
			$data = array(
			   'ACA_BAT_COU_ID' => $this->input->post('ACA_BAT_COU_ID'),
			   'ACA_BAT_NAME' => $this->input->post('ACA_BAT_NAME'),
			   'ACA_BAT_START_DT' => $this->input->post('ACA_BAT_START_DT'),
			   'ACA_BAT_END_DT' => $this->input->post('ACA_BAT_END_DT'),
			   'ACA_BAT_IMP_PRE_BAT_SUB_YN' => $this->input->post('ACA_BAT_IMP_PRE_BAT_SUB_YN'),
			   'ACA_BAT_IMP_PRE_BAT_MASTER_FEE_YN' => $this->input->post('ACA_BAT_IMP_PRE_BAT_MASTER_FEE_YN'),
			   'ACA_BAT_UPD_USER_ID' => $this->input->post('ACA_BAT_CRT_USER_ID')
			);
			$this->db->where('ACA_BAT_ID', $id);
			$this->db->update('Acodemics_batch_details', $data); 
			return true;
	    }
		
		public function getBatchDetailAll(){
			$sql="SELECT * FROM `Acodemics_batch_details`";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function getBatchDetail($id){
			$sql="SELECT * FROM `Acodemics_batch_details` where ACA_BAT_COU_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		// Acodemics Subject Details
		
		public function addSubjectDetail(){
			$data = array(
			   'ACA_SUB_COU_ID' => $this->input->post('ACA_SUB_COU_ID'),
			   'ACA_SUB_BAT_ID' => $this->input->post('ACA_SUB_BAT_ID'),
			   'ACA_SUB_NAME' => $this->input->post('ACA_SUB_NAME'),
			   'ACA_SUB_CODE' => $this->input->post('ACA_SUB_CODE'),
			   'ACA_SUB_MAXCLASS_WEEK' => $this->input->post('ACA_SUB_MAXCLASS_WEEK'),
			   'ACA_SUB_NOEXAM_YN' => $this->input->post('ACA_SUB_NOEXAM_YN'),
			   'ACA_SUB_SIXTH_SUB_YN' => $this->input->post('ACA_SUB_SIXTH_SUB_YN'),
			   'ACA_SUB_ASL_SUB_YN' => $this->input->post('ACA_SUB_ASL_SUB_YN'),
			   'ACA_SUB_ASL_MARK' => $this->input->post('ACA_SUB_ASL_MARK'),
			   'ACA_SUB_ELECT_YN' => $this->input->post('ACA_SUB_ELECT_YN'),
			   'ACA_SUB_ELECT_SUB_NAME' => $this->input->post('ACA_SUB_ELECT_SUB_NAME'),
			   'ACA_SUB_CRT_USER_ID' => $this->input->post('ACA_SUB_CRT_USER_ID')
			);
			$this->db->insert('Acodemics_manage_subject', $data); 
			$adm_id= $this->db->insert_id();
			return $adm_id;
	    }
		
		public function editSubjectDetail($id){
			$data = array(
			   'ACA_SUB_COU_ID' => $this->input->post('ACA_SUB_COU_ID'),
			   'ACA_SUB_BAT_ID' => $this->input->post('ACA_SUB_BAT_ID'),
			   'ACA_SUB_NAME' => $this->input->post('ACA_SUB_NAME'),
			   'ACA_SUB_CODE' => $this->input->post('ACA_SUB_CODE'),
			   'ACA_SUB_MAXCLASS_WEEK' => $this->input->post('ACA_SUB_MAXCLASS_WEEK'),
			   'ACA_SUB_NOEXAM_YN' => $this->input->post('ACA_SUB_NOEXAM_YN'),
			   'ACA_SUB_SIXTH_SUB_YN' => $this->input->post('ACA_SUB_SIXTH_SUB_YN'),
			   'ACA_SUB_ASL_SUB_YN' => $this->input->post('ACA_SUB_ASL_SUB_YN'),
			   'ACA_SUB_ASL_MARK' => $this->input->post('ACA_SUB_ASL_MARK'),
			   'ACA_SUB_ELECT_YN' => $this->input->post('ACA_SUB_ELECT_YN'),
			   'ACA_SUB_ELECT_SUB_NAME' => $this->input->post('ACA_SUB_ELECT_SUB_NAME'),
			   'ACA_SUB_UPD_USER_ID' => $this->input->post('ACA_SUB_UPD_USER_ID')
			);
			$this->db->where('ACA_SUB_ID', $id);
			$this->db->update('Acodemics_manage_subject', $data); 
			return true;
	    }

		public function getSubjectDetailAll(){
			$sql="SELECT * FROM `Acodemics_manage_subject`";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function getSubjectDetail($id){
			$sql="SELECT * FROM `Acodemics_manage_subject` where ACA_SUB_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function ManageSubjectDetail($id,$id1){
			$sql="SELECT * FROM acodemics_manage_subject WHERE ACA_SUB_COU_ID='$id' AND ACA_SUB_BAT_ID='$id1'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
		
		public function getStudent(){
			$sql="SELECT * FROM `Acodemics_batch_details`";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
	}
?>