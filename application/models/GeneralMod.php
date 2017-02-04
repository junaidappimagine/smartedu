<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class GeneralMod extends CI_Model {

		// Login Details 
		
		public function getLoginDetail($id,$id1){
			$sql="SELECT * FROM `user` where USER_EMAIL='$id' AND USER_PASSWORD='$id1'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if(!empty($result)){
				return $result;
			}
		}
		
		public function addPushReg($Regid){
			$id=1;
			$data = array(
			   'regID' => $Regid
			);
			$this->db->where('id', $id);
			$this->db->update('pushNotify', $data);
			return true;
		}
		
	}
?>