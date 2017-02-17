<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class profileModel extends CI_Model {

		// Profile details
		public function saveProfileDetails($value){
			$id=$value['ID'];
	    	$sql="SELECT count(FIRSTNAME) FROM PROFILE WHERE ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			$location_id=$result[0]['LOCATION_ID'];
			$edu_id=$result[0]['EDUCATION_ID'];

			// Check Profile data
			if($result[0]['count(FIRSTNAME)']!=0){
				$sql="SELECT count(CITY) FROM LOCATION WHERE ID='$location_id'";
				$result = $this->db->query($sql, $return_object = TRUE)->result_array();
				if($result[0]['count(CITY)']!=0){
					$data = array(
					   'CITY' => $values['CITY'],
					   'STATE' => $values['STATE'],
					   'COUNTRY' => $values['COUNTRY'],
					   'ZIPCODE' => $values['ZIPCODE'],
					   'LANDMARK' => $values['LANDMARK'],
					   'STREET' => $values['STREET'],
					   'CRT_USER_ID' => $values['CRT_USER_ID']
					);
					$this->db->where('ID', $location_id);
					$this->db->update('LOCATION', $data); 
				}

				// Update Education
				$sql="SELECT count(QUALICATION) FROM EDUCATION WHERE ID='$edu_id'";
				$result = $this->db->query($sql, $return_object = TRUE)->result_array();
				if($result[0]['count(QUALICATION)']!=0){
					$data = array(
					   'QUALICATION' => $values['QUALICATION'],
					   'INST_NAME' => $values['INST_NAME'],
					   'ADDRESS1' => $values['ADDRESS1'],
					   'ADDRESS2' => $values['ADDRESS2'],
					   'UPLOAD_DOC1' => $values['UPLOAD_DOC1'],
					   'UPLOAD_DOC2' => $values['UPLOAD_DOC2'],
					   'PERCENTAGE' => $values['PERCENTAGE'],
					   'DURATION_FROM' => $values['DURATION_FROM'],
					   'DURATION_TO' => $values['DURATION_TO'],
					   'CRT_USER_ID' => $values['CRT_USER_ID']
					);
					$this->db->where('ID', $location_id);
					$this->db->update('EDUCATION', $data); 
				}

				// Update Profile
				$data = array(
				   'FIRSTNAME' => $values['FIRSTNAME'],
				   'MIDDLENAME' => $values['MIDDLENAME'],
				   'LASTNAME' => $values['LASTNAME'],
				   'DOB' => $values['DOB'],
				   'GENDER' => $values['GENDER'],
				   'IMAGE1' => $values['IMAGE1'],
				   'EMAIL' => $values['EMAIL'],
				   'PHONE_NO_1' => $values['PHONE_NO_1'],
				   'PHONE_NO_2' => $values['PHONE_NO_2'],
				   'JOINING_DATE' => $values['JOINING_DATE'],
				   'RELIGION' => $values['RELIGION'],
				   'MOTHER_TONGUE' => $values['MOTHER_TONGUE'],
				   'FACEBOOK_LINK' => $values['FACEBOOK_LINK'],
				   'GOOGLE_LINK' => $values['GOOGLE_LINK'],
				   'BLOOD_GROUP' => $values['BLOOD_GROUP'],
				   'LOCATION_ID' => $locationId,
				   'EDUCATION_ID' => $educationId,
				   'PASSWORD' => $values['PASSWORD'],
				   'ROLE_ID' => $values['ROLE_ID'],
				   'CRT_USER_ID' => $values['CRT_USER_ID']
				);
				$this->db->where('ID', $id);
				$this->db->update('PROFILE', $data); 
				return array('status'=>true, 'message'=>"Record Updated Successfully",'PROF_ID'=>$id);
			}else {
				// Add Location
				$data = array(
				   'CITY' => $values['CITY'],
				   'STATE' => $values['STATE'],
				   'COUNTRY' => $values['COUNTRY'],
				   'ZIPCODE' => $values['ZIPCODE'],
				   'LANDMARK' => $values['LANDMARK'],
				   'STREET' => $values['STREET'],
				   'CRT_USER_ID' => $values['CRT_USER_ID']
				);
				$this->db->insert('LOCATION', $data); 
				$locationId= $this->db->insert_id();

				//Add Education
				$data = array(
				   'QUALICATION' => $values['QUALICATION'],
				   'INST_NAME' => $values['INST_NAME'],
				   'ADDRESS1' => $values['ADDRESS1'],
				   'ADDRESS2' => $values['ADDRESS2'],
				   'UPLOAD_DOC1' => $values['UPLOAD_DOC1'],
				   'UPLOAD_DOC2' => $values['UPLOAD_DOC2'],
				   'PERCENTAGE' => $values['PERCENTAGE'],
				   'DURATION_FROM' => $values['DURATION_FROM'],
				   'DURATION_TO' => $values['DURATION_TO'],
				   'CRT_USER_ID' => $values['CRT_USER_ID']
				);
				$this->db->insert('EDUCATION', $data);
				$educationId= $this->db->insert_id();

				// Profile Insert
				if(!empty($locationId)){
					$data = array(
					   'FIRSTNAME' => $values['FIRSTNAME'],
					   'MIDDLENAME' => $values['MIDDLENAME'],
					   'LASTNAME' => $values['LASTNAME'],
					   'DOB' => $values['DOB'],
					   'GENDER' => $values['GENDER'],
					   'IMAGE1' => $values['IMAGE1'],
					   'EMAIL' => $values['EMAIL'],
					   'PHONE_NO_1' => $values['PHONE_NO_1'],
					   'PHONE_NO_2' => $values['PHONE_NO_2'],
					   'JOINING_DATE' => $values['JOINING_DATE'],
					   'RELIGION' => $values['RELIGION'],
					   'MOTHER_TONGUE' => $values['MOTHER_TONGUE'],
					   'FACEBOOK_LINK' => $values['FACEBOOK_LINK'],
					   'GOOGLE_LINK' => $values['GOOGLE_LINK'],
					   'BLOOD_GROUP' => $values['BLOOD_GROUP'],
					   'LOCATION_ID' => $locationId,
					   'EDUCATION_ID' => $educationId,
					   'PASSWORD' => $values['PASSWORD'],
					   'ROLE_ID' => $values['ROLE_ID'],
					   'CRT_USER_ID' => $values['CRT_USER_ID']
					);
					$this->db->insert('PROFILE', $data);
					$profileId= $this->db->insert_id();
					return array('status'=>true, 'message'=>"Record Inserted Successfully",'PROF_ID'=>$profileId);
				}
			}
	    }
	    function deleteProfileDetails($id){
	    	$sql="DELETE FROM PROFILE WHERE ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }
	    function getProfile_details($id){
	    	$sql="SELECT * FROM PROFILE where ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }

	    function getAllProfile_details(){
	    	$sql="SELECT * FROM PROFILE";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	}
?>