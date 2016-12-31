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
		if ($id == null){
			$result=$this->HrConfigModel->fetchCategoryDetails();
			foreach ($result as $cat) { ?>
				<tr>
					<td> <?php echo $cat['EMP_C_NAME'];?></td>
					<td><?php echo $cat['EMP_C_ACTIVE_YN'];?></td>
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editCategory('<?php echo $cat['EMP_C_ID'];?>')" category-id="<?php echo $cat['EMP_C_ID'];?>"><i class="fa fa-edit"></i></button>
					<button type="button" category-id="<?php echo $cat['EMP_C_ID'];?>" onclick="deleteCategory('<?php echo $cat['EMP_C_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
			   </tr>
			<?php } 
		}else {
			$result=$this->HrConfigModel->getCategory_details($id);
    		echo json_encode($result);
		}	
	}
	function employeeCategory_put(){
    	$id=$this->put('id');
		$name=$this->put('name');
		$prefix=$this->put('prefix');
		$status=$this->put('status');
		$result=$this->HrConfigModel->updateCategory($id,$name,$prefix,$status);
		if($result==true){
			echo "success";
		}
    }
    function employeeCategory_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deleteCategory($id);
    }

    

    // Employee Department

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


    // Employee Position

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
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editCategory('<?php echo $cat['EMP_P_ID'];?>')" category-id="<?php echo $cat['EMP_P_ID'];?>"><i class="fa fa-edit"></i></button>
					<button type="button" category-id="<?php echo $cat['EMP_P_ID'];?>" onclick="deleteCategory('<?php echo $cat['EMP_P_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
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
		$prefix=$this->put('prefix');
		$status=$this->put('status');
		$result=$this->HrConfigModel->updatePosition($id,$name,$prefix,$status);
		if($result==true){
			echo "success";
		}
    }
    function employeePosition_delete(){
    	$id=$this->delete('id');
    	$result=$this->HrConfigModel->deletePosition($id);
    }

    // Employee Grade

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
					<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editGrade('<?php echo $grade['EMP_G_ID'];?>')"><i class="fa fa-edit"></i></button>
					<button type="button" onclick="deleteGrade('<?php echo $grade['EMP_G_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
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

}