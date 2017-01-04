<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class financemodel extends CI_Model {

		// ------------------------------ Asset -----------------------------------------------------------------
		public function addAssetData(){
	    	$id=$this->input->post('FINC_AS_ID');
	    	$title=$this->input->post('FINC_AS_TITLE');
	    	$desc=$this->input->post('FINC_AS_DESC');
	    	$amount=$this->input->post('FINC_AS_AMT');
	    	$sql="SELECT count(FINC_AS_TITLE) FROM finance_asset WHERE FINC_AS_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_AS_TITLE)']!=0){
				$sql="UPDATE finance_asset SET FINC_AS_TITLE='$title',FINC_AS_DESC='$desc',FINC_AS_AMT='$amount' WHERE FINC_AS_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_asset (FINC_AS_TITLE, FINC_AS_DESC, FINC_AS_AMT) VALUES ('$title','$desc','$amount')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getAsset_details($id){
	    	$sql="SELECT * FROM finance_asset where FINC_AS_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteAsset($id){
	    	$sql="DELETE FROM finance_asset WHERE FINC_AS_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // ---------------------------------------- Liability ---------------------------------------------------------
	    public function addLiabilityData(){
	    	$id=$this->input->post('FINC_LI_ID');
	    	$title=$this->input->post('FINC_LI_TITLE');
	    	$desc=$this->input->post('FINC_LI_DESC');
	    	$amount=$this->input->post('FINC_LI_AMT');
	    	$sql="SELECT count(FINC_LI_TITLE) FROM finance_liability WHERE FINC_LI_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_LI_TITLE)']!=0){
				$sql="UPDATE finance_liability SET FINC_LI_TITLE='$title',FINC_LI_DESC='$desc',FINC_LI_AMT='$amount' WHERE FINC_LI_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_liability (FINC_LI_TITLE, FINC_LI_DESC, FINC_LI_AMT) VALUES ('$title','$desc','$amount')";
				$this->db->query($sql);
				return true;
			}
	    	
	    }
	    function getLiability_details($id){
	    	$sql="SELECT * FROM finance_liability where FINC_LI_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteLiabilityData($id){
	    	$sql="DELETE FROM finance_liability WHERE FINC_LI_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // -------------------------------------------------- Category --------------------------------------------------------

	    function addFinanceCategory(){
	    	$id=$this->input->post('FINC_CA_ID');
	    	$name=$this->input->post('FINC_CA_NAME');
	    	$desc=$this->input->post('FINC_CA_DESC');
	    	$income_yn=$this->input->post('FINC_CA_INCOME_YN');
	    	$sql="SELECT count(FINC_CA_NAME) FROM finance_category WHERE FINC_CA_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_CA_NAME)']!=0){
				$sql="UPDATE finance_category SET FINC_CA_NAME='$name',FINC_CA_DESC='$desc',FINC_CA_INCOME_YN='$income_yn' WHERE FINC_CA_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_category (FINC_CA_NAME, FINC_CA_DESC, FINC_CA_INCOME_YN) VALUES ('$name','$desc','$income_yn')";
				$this->db->query($sql);
				return true;
			}
	    }
	    function getFinanceCategory($id){
	    	$sql="SELECT * FROM finance_category where FINC_CA_ID ='$id'";
			return $result = $this->db->query($sql, $return_object = TRUE)->result_array();
	    }
	    function deleteFinanceCategory($id){
	    	$sql="DELETE FROM finance_category WHERE FINC_CA_ID='$id'";
	    	$result = $this->db->query($sql);
	    	return $this->db->affected_rows();
	    }

	    // --------------------------------------------------- Donation ---------------------------------------------------

	    function addDonation(){
	    	$id=$this->input->post('FINC_DO_ID');
	    	$name=$this->input->post('FINC_DO_NAME');
	    	$desc=$this->input->post('FINC_DO_DESC');
	    	$txn_date=$this->input->post('FINC_DO_TXN_DT');
	    	$amount=$this->input->post('FINC_DO_AMT');
	    	$sql="SELECT count(FINC_DO_NAME) FROM finance_donation WHERE FINC_DO_ID='$id'";
			$result = $this->db->query($sql, $return_object = TRUE)->result_array();
			if($result[0]['count(FINC_DO_NAME)']!=0){
				$sql="UPDATE finance_donation SET FINC_DO_NAME='$name',FINC_DO_DESC='$desc',FINC_DO_TXN_DT='$txn_date',FINC_DO_AMT='$amount' WHERE FINC_DO_ID='$id'";
				$this->db->query($sql);
				return true;
			}else {
				$sql="INSERT INTO finance_donation (FINC_DO_NAME, FINC_DO_DESC, FINC_DO_TXN_DT,FINC_DO_AMT) VALUES ('$name','$desc','$txn_date','$amount')";
				$this->db->query($sql);
				return true;
			}
	    }
	}
?>