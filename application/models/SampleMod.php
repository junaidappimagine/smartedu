<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SampleMod extends CI_Model {
    
    public function Saminsert(){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$sql="SELECT count(email) FROM sam WHERE email='$email'";
		$result = $this->db->query($sql, $return_object = TRUE)->result_array();
		if($result[0]['count(email)']!=0){
			$sql="UPDATE sam SET name='$name',address='$address' WHERE email='$email'";
			$this->db->query($sql);
			return true;
		}else{
			$sql="INSERT INTO sam (name, email, address) VALUES ('$name','$email','$address')";
			$this->db->query($sql);
			return true;
		}
    }
	
	public function SamselectAll(){
		$sql="SELECT * FROM sam";
		$result = $this->db->query($sql, $return_object = TRUE)->result_array();
		return $result;
	}
	public function Samselect($id){
		$sql="SELECT * FROM sam where id ='$id'";
		$result = $this->db->query($sql, $return_object = TRUE)->result_array();
		return $result;
	}
	public function SamDelete($id){
		$sql="DELETE FROM sam where id ='$id'";
		$result = $this->db->query($sql);
		return $this->db->affected_rows();
	}
}
?>