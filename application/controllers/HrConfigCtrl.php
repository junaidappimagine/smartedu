<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class HrConfigCtrl extends REST_Controller {    
    function HrConfigCtrl()
    {
		parent::__construct();
		$this->load->model('HrConfigModel');
    }

    // Employee category

    function employeeCategory_post()
    {
    	$result=$this->HrConfigModel->addEmployeeCategory();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeCategory_get(){
    	$id=$this->get('id');
    	$result=$this->HrConfigModel->getCategory_details($id);
    	echo json_encode($result);		
	}

    function employeeCategory_delete(){
    	$id=$this->delete('id');
    	if ($id == null)
        {
            $this->response(['status'=>FALSE,'message'=>'No data Here'], REST_Controller::HTTP_BAD_REQUEST);
        }else{
			$result=$this->HrConfigModel->deleteCategory($id);
			if($result!=0){
				$message = [
				'id' => $id,
				'message' => 'Record Deleted Successfully'
				];
				$this->set_response(['status'=>TRUE,'message'=>$message], REST_Controller::HTTP_OK);
			}else{
				$this->set_response(['status'=>FALSE,'message'=>'There is no Record found'], REST_Controller::HTTP_NOT_FOUND);
			}
		}  
    }

    

    // ------------------------------------------------------- Employee Department ---------------------------------------------

    function employeeDepartment_post()
    {
    	$result=$this->HrConfigModel->addDepartment_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeDepartment_get(){
		$id=$this->get('id');
		if ($id == null){
			$result=$this->HrConfigModel->fetchDepartment_Details();
			foreach ($result as $dept) { ?>
				<tr>
					<td> <?php echo $dept['EMP_D_NAME'];?></td>
					<td><?php echo $dept['EMP_D_STATUS'];?></td>
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editDepartment('<?php echo $dept['EMP_D_ID'];?>')" category-id="<?php echo $dept['EMP_D_ID'];?>"><i class="fa fa-edit"></i></button>
					<button type="button" category-id="<?php echo $dept['EMP_D_ID'];?>" onclick="deleteDepartment('<?php echo $dept['EMP_D_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
			   </tr>
			<?php } 
		}else {
			$result=$this->HrConfigModel->fetchPerticularDaprtment_Details($id);
    		echo json_encode($result);
		}	
	}
	function employeeDepartment_put(){
    	$id=$this->put('dept_id');
		$name=$this->put('dept_name');
		$code=$this->put('dept_code');
		$status=$this->put('dept_status');
		$result=$this->HrConfigModel->updateDepartment($id,$name,$code,$status);
		if($result==true){
			echo "success";
		}
    }
    function employeeDepartment_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deleteDepartment($id);
    }


    // ---------------------------------------------------Employee Position ----------------------------------------

    function employeePosition_post()
    {
    	$result=$this->HrConfigModel->addPosition_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeePosition_get(){
		$id=$this->get('id');
		if ($id == null){
			$result=$this->HrConfigModel->fetchAllPosition_Details();
			foreach ($result as $cat) { ?>
				<tr>
					<td> <?php echo $cat['EMP_P_NAME'];?></td>
					<td><?php echo $cat['EMP_P_ACTIVE_YN'];?></td>
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editPositions('<?php echo $cat['EMP_P_ID'];?>')" category-id="<?php echo $cat['EMP_P_ID'];?>"><i class="fa fa-edit"></i></button>
					<button type="button" onclick="deletePositions('<?php echo $cat['EMP_P_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
			   </tr>
			<?php } 
		}else {
			$result=$this->HrConfigModel->fetchPerticularPosition_Details($id);
    		echo json_encode($result);
		}	
	}
	function employeePosition_put(){
    	$id=$this->put('id');
		$name=$this->put('name');
		$cat_code=$this->put('cat_code');
		$status=$this->put('status');
		$result=$this->HrConfigModel->updatePosition($id,$name,$cat_code,$status);
		if($result==true){
			echo "success";
		}
    }
    function employeePosition_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deletePosition($id);
    }

    // -------------------------------------------- Employee Grade --------------------------------------------

    function employeeGrade_post()
    {
    	$result=$this->HrConfigModel->addGrade_Details();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeGrade_get(){
		$id=$this->get('id');
		if ($id == null){
			$result=$this->HrConfigModel->fetchGrade_Details();
			foreach ($result as $grade) { ?>
				<tr>
					<td> <?php echo $grade['EMP_G_NAME'];?></td>
					<td><?php echo $grade['EMP_G_ACTIVE_YN'];?></td>
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editGrades('<?php echo $grade['EMP_G_ID'];?>')"><i class="fa fa-edit"></i></button>
					<button type="button" onclick="deleteGrades('<?php echo $grade['EMP_G_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
			   </tr>
			<?php } 
		}else {
			$result=$this->HrConfigModel->fetchPerticularGrade_Details($id);
    		echo json_encode($result);
		}	
	}
	function employeeGrade_put(){
    	$id=$this->put('id');
		$name=$this->put('grade_name');
		$priority=$this->put('priority');
		$day=$this->put('max_day');
		$week=$this->put('max_week');
		$status=$this->put('status');
		$result=$this->HrConfigModel->updateGrade($id,$name,$priority,$day,$week,$status);
		if($result==true){
			echo "success";
		}
    }
    function employeeGrade_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deleteGrade($id);
    }

    // ------------------------------------------ Employee Leave Type ----------------------------------------------------


    function employeeLeaveType_post(){
    	$result=$this->HrConfigModel->addleaveType();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeLeaveType_get(){
		$id=$this->get('id');
		if ($id == null){
			$result=$this->HrConfigModel->fetchLeaveType_Details();
			foreach ($result as $leave_type) { ?>
				<tr>
					<td> <?php echo $leave_type['EMP_L_NAME'];?></td>
					<td><?php echo $leave_type['EMP_L_CODE'];?></td>
					<td><?php echo $leave_type['EMP_L_VALID_FROM'];?></td>
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editLeaveTypes('<?php echo $leave_type['EMP_L_ID'];?>')"><i class="fa fa-edit"></i></button>
					<button type="button" onclick="deleteLeaveTypes('<?php echo $leave_type['EMP_L_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
			   </tr>
			<?php } 
		}else {
			$result=$this->HrConfigModel->fetchPerticularLeaveType_Details($id);
    		echo json_encode($result);
		}	
	}
	function employeeLeaveType_put(){
    	$id=$this->put('id');
		$name=$this->put('EMP_L_NAME');
		$code=$this->put('EMP_L_CODE');
		$count=$this->put('EMP_L_COUNT');
		$valid_from=$this->put('EMP_L_VALID_FROM');
		$leave_bal=$this->put('EMP_L_ALLOW_LEAVE_BAL');
		$bal_count=$this->put('EMP_L_ALLOW_BAL_COUNT');
		$add_leave=$this->put('EMP_L_ADDI_LEAVE_DED_YN');
		$status=$this->put('EMP_L_STATUS');
		$result=$this->HrConfigModel->updateLeaveType($id,$name,$code,$count,$valid_from,$leave_bal,$bal_count,$add_leave,$status);
		if($result==true){
			echo "success";
		}
    }
    function employeeLeaveType_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deleteLeaveType($id);
    }

    // ------------------------------------------ Bank Details --------------------------------------------------------------

    function employeeBankdetails_post(){
    	$result=$this->HrConfigModel->addBankDetails();
    	if($result==true){
			$this->set_response(['status' =>TRUE,'message'=>"Record Inserted Successfully"], REST_Controller::HTTP_CREATED);
		}else{
			$this->set_response(['status' =>FALSE,'message'=>"Failure"], REST_Controller::HTTP_CREATED);
		}
    }
    function employeeBankdetails_get(){
		$id=$this->get('id');
		if ($id == null){
			$result=$this->HrConfigModel->fetchAllBankDetails();
			foreach ($result as $bank) { ?>
				<tr>
					<td> <?php echo $bank['EMP_BNK_NAME'];?></td>
					<td><?php echo $bank['EMP_BNK_ACTIVE_YN'];?></td>
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editBankDetail('<?php echo $bank['EMP_BNK_ID'];?>')"><i class="fa fa-edit"></i></button>
					<button type="button" onclick="deleteBankDetail('<?php echo $bank['EMP_BNK_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
			   </tr>
			<?php } 
		}else {
			$result=$this->HrConfigModel->fetchBank_Details($id);
    		echo json_encode($result);
		}	
	}
	function employeeBankdetails_put(){
    	$id=$this->put('bank_id');
		$name=$this->put('bank_name');
		$active=$this->put('bank_active');
		$result=$this->HrConfigModel->updateBankDetails($id,$name,$active);
		if($result==true){
			echo "success";
		}
    }
    function employeeBankdetails_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deleteBankDetails($id);
    }

}