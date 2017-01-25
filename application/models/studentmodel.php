<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class studentmodel extends CI_Model {

		// Student Admission
		
		public function addStudentAdmissionDetails(){
			$data = array(
			   'STU_ADM_NO' => $this->input->post('STU_ADM_NO'),
			   'STU_ADM_DT' => $this->input->post('STU_ADM_DT'),
			   'STU_ADM_FIRST_NAME' => $this->input->post('STU_ADM_FIRST_NAME'),
			   'STU_ADM_MIDDLE_NAME' => $this->input->post('STU_ADM_MIDDLE_NAME'),
			   'STU_ADM_LAST_NAME' => $this->input->post('STU_ADM_LAST_NAME'),
			   'STU_ADM_DOB' => $this->input->post('STU_ADM_DOB'),
			   'STU_ADM_GENDER' => $this->input->post('STU_ADM_GENDER'),
			   'STU_ADM_NATIONALITY' => $this->input->post('STU_ADM_NATIONALITY'),
			   'STU_ADM_MOTHER_TONGUE' => $this->input->post('STU_ADM_MOTHER_TONGUE'),
			   'STU_ADM_RELIGION' => $this->input->post('STU_ADM_RELIGION'),
			   'STU_ADM_ADD1' => $this->input->post('STU_ADM_ADD1'),
			   'STU_ADM_ADD2' => $this->input->post('STU_ADM_ADD2'),
			   'STU_ADM_CITY' => $this->input->post('STU_ADM_CITY'),
			   'STU_ADM_STATE' => $this->input->post('STU_ADM_STATE'),
			   'STU_ADM_COUNTRY' => $this->input->post('STU_ADM_COUNTRY'),
			   'STU_ADM_PINCODE' => $this->input->post('STU_ADM_PINCODE'),
			   'STU_ADM_PHONE' => $this->input->post('STU_ADM_PHONE'),
			   'STU_ADM_MOBILE' => $this->input->post('STU_ADM_MOBILE'),
			   'STU_ADM_EMAIL' => $this->input->post('STU_ADM_EMAIL'),
			   'STU_ADM_IMAGE_PATH' => $this->input->post('STU_ADM_IMAGE_PATH'),
			   'STU_ADM_CB_COURSE' => $this->input->post('STU_ADM_CB_COURSE'),
			   'STU_ADM_CB_BATCH' => $this->input->post('STU_ADM_CB_BATCH'),
			   'STU_ADM_CB_ROLL_NO' => $this->input->post('STU_ADM_CB_ROLL_NO'),
			   'STU_ADM_USER_ID' => $this->input->post('STU_ADM_USER_ID')
			);
			$this->db->insert('student_admission_details', $data); 
			$adm_id= $this->db->insert_id();
			//return $adm_id;
			if(!empty($adm_id)){
				return $this->input->post('STU_ADM_NO');
			}
	    }

	    public function addStudentParentDetails(){
			$data = array(
			   'STU_PA_ADM_NO' => $this->input->post('STU_PA_ADM_NO'),
			   'STU_PA_FIRST_NAME' => $this->input->post('STU_PA_FIRST_NAME'),
			   'STU_PA_LAST_NAME' => $this->input->post('STU_PA_LAST_NAME'),
			   'STU_PA_RELATION' => $this->input->post('STU_PA_RELATION'),
			   'STU_PA_DOB' => $this->input->post('STU_PA_DOB'),
			   'STU_PA_EDUCATION' => $this->input->post('STU_PA_EDUCATION'),
			   'STU_PA_OCCUPATION' => $this->input->post('STU_PA_OCCUPATION'),
			   'STU_PA_INCOME' => $this->input->post('STU_PA_INCOME'),
			   'STU_PA_EMAIL' => $this->input->post('STU_PA_EMAIL'),
			   'STU_PA_ADD1' => $this->input->post('STU_PA_ADD1'),
			   'STU_PA_ADD2' => $this->input->post('STU_PA_ADD2'),
			   'STU_PA_CITY' => $this->input->post('STU_PA_CITY'),
			   'STU_PA_STATE' => $this->input->post('STU_PA_STATE'),
			   'STU_PA_COUNTRY' => $this->input->post('STU_PA_COUNTRY'),
			   'STU_PA_PHONE1' => $this->input->post('STU_PA_PHONE1'),
			   'STU_PA_PHONE2' => $this->input->post('STU_PA_PHONE2'),
			   'STU_PA_MOBILE' => $this->input->post('STU_PA_MOBILE'),
			   'STU_PA_GA_NAME' => $this->input->post('STU_PA_GA_NAME'),
			   'STU_PA_GA_RELATION' => $this->input->post('STU_PA_GA_RELATION'),
			   'STU_PA_GA_ADD1' => $this->input->post('STU_PA_GA_ADD1'),
			   'STU_PA_GA_ADD2' => $this->input->post('STU_PA_GA_ADD2'),
			   'STU_PA_GA_CITY' => $this->input->post('STU_PA_GA_CITY'),
			   'STU_PA_GA_STATE' => $this->input->post('STU_PA_GA_STATE'),
			   'STU_PA_GA_COUNTRY' => $this->input->post('STU_PA_GA_COUNTRY'),
			   'STU_PA_GA_PHONE1' => $this->input->post('STU_PA_GA_PHONE1'),
			   'STU_PA_USER_ID' => $this->input->post('STU_PA_USER_ID'),
			);
			$this->db->insert('student_parent_details', $data); 
			$adm_id= $this->db->insert_id();
			if(!empty($adm_id)){
				return true;
			}	    	
	    }

	    public function addStudentPreviousEducation(){
			$data = array(
			   'STU_PRE_D_ADM_NO' => $this->input->post('STU_PRE_D_ADM_NO'),
			   'STU_PRE_D_INSTITUTE_NAME' => $this->input->post('STU_PRE_D_INSTITUTE_NAME'),
			   'STU_PRE_D_COURSE' => $this->input->post('STU_PRE_D_COURSE'),
			   'STU_PRE_D_YEAR' => $this->input->post('STU_PRE_D_YEAR'),
			   'STU_PRE_ADD_BLOOD_GROUP' => $this->input->post('STU_PRE_ADD_BLOOD_GROUP'),
			   'STU_PRE_ADD_BIRTH_PLACE' => $this->input->post('STU_PRE_ADD_BIRTH_PLACE'),
			   'STU_PRE_ADD_STUD_CATE' => $this->input->post('STU_PRE_ADD_STUD_CATE'),
			   'STU_PRE_D_CRT_DT' => $this->input->post('STU_PRE_D_CRT_DT'),
			   'STU_PRE_D_USER_ID' => $this->input->post('STU_PRE_D_USER_ID')
			);
			$this->db->insert('student_previous_education', $data); 
			$adm_id= $this->db->insert_id();
			if(!empty($adm_id)){
				return true;
			}				
	    }

	    public function addStudentCategory(){
			$data = array(
			   'STU_CATE_TYPE_NAME' => $this->input->post('STU_CATE_TYPE_NAME')
			);
			$this->db->insert('student_category', $data);  	
	    }
		
		public function getStudent(){
			$sql="SELECT * FROM `student_admission_details`";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			return $result;
		}
	}
?>