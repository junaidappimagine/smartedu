<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class studentmodel extends CI_Model {

		// ------------------------------ Student Admission -----------------------------------------------------------------
		public function addStudentAdmissionDetails(){
			$data = array(
			   'STU_ADM_DT' => $this->input->post('STU_ADM_DT'),
			   'STU_ADM_FIRST_NAME' => $this->input->post('STU_ADM_FIRST_NAME'),
			   'STU_ADM_MIDDLE_NAME' => $this->input->post('STU_ADM_MIDDLE_NAME'),
			   'STU_ADM_LAST_NAME' => $this->input->post('STU_ADM_LAST_NAME'),
			   'STU_ADM_DOB' => $this->input->post('STU_ADM_DOB'),
			   'STU_ADM_GENDER' => $this->input->post('STU_ADM_GENDER'),
			   'STU_ADM_BIRTH_PLACE' => $this->input->post('STU_ADM_BIRTH_PLACE'),
			   'STU_ADM_NATIONALITY' => $this->input->post('STU_ADM_NATIONALITY'),
			   'STU_ADM_MOTHER_TONGUE' => $this->input->post('STU_ADM_MOTHER_TONGUE'),
			   'STU_ADM_STUD_CATE' => $this->input->post('STU_ADM_STUD_CATE'),
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
			   'STU_ADM_IMAGE_PATH' => $this->input->post('STU_ADM_IMAGE_PATH')
			);
			$this->db->insert('student_admission_details', $data); 
			$adm_id= $this->db->insert_id();	    	
	    }

	    public function addStudentCourseBatchData(){
			$data = array(
			   'STU_CB_ADM_NO' => $this->input->post('STU_CB_ADM_NO'),
			   'STU_CB_STU_NAME' => $this->input->post('STU_CB_STU_NAME'),
			   'STU_CB_COURSE' => $this->input->post('STU_CB_COURSE'),
			   'STU_CB_BATCH' => $this->input->post('STU_CB_BATCH'),
			   'STU_CB_ROLL_NO' => $this->input->post('STU_CB_ROLL_NO')
			);
			$this->db->insert('student_course_batch', $data);    	
	    }

	    public function addStudentParentDetails(){
			$data = array(
			   'STU_PA_ADM_NO' => $this->input->post('STU_PA_ADM_NO'),
			   'STU_PA_STU_FIRST_NAME' => $this->input->post('STU_PA_STU_FIRST_NAME'),
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
			   'STU_PA_EMERGENCY_CONTACT_YN' => $this->input->post('STU_PA_EMERGENCY_CONTACT_YN')
			);
			$this->db->insert('student_parent_details', $data); 
			$adm_id= $this->db->insert_id();	    	
	    }

	    public function addStudentPreviousEducation(){
			$data = array(
			   'STU_PRE_D_ADM_NO' => $this->input->post('STU_PRE_D_ADM_NO'),
			   'STU_PRE_D_INSTITUTE_NAME' => $this->input->post('STU_PRE_D_INSTITUTE_NAME'),
			   'STU_PRE_D_COURSE' => $this->input->post('STU_PRE_D_COURSE'),
			   'STU_PRE_D_YEAR' => $this->input->post('STU_PRE_D_YEAR')
			);
			$this->db->insert('student_previous_education', $data);    	
	    }

	    public function addStudentAdditionalDetails(){
			$data = array(
			   'STU_ADD_ADM_NO' => $this->input->post('STU_ADD_ADM_NO'),
			   'STU_ADD_ID_CARD' => $this->input->post('STU_ADD_ID_CARD'),
			   'STU_ADD_HT_OF_STUD' => $this->input->post('STU_ADD_HT_OF_STUD'),
			   'STU_ADD_BLOOD_GROUP' => $this->input->post('STU_ADD_BLOOD_GROUP')
			);
			$this->db->insert('student_additional_details', $data);    	
	    }

	    public function addStudentCategory(){
			$data = array(
			   'STU_CATE_TYPE_NAME' => $this->input->post('STU_CATE_TYPE_NAME')
			);
			$this->db->insert('student_category', $data);  	
	    }
	}
?>