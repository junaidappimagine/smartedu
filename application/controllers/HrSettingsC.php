<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hrSettingsC extends CI_Controller {
    function hrSettingsC()
    {
        parent::__construct();
        $this->load->model('HrSettingModel');
        $this->load->library('Datatables');
    }

   function index()
   {
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
    function employee_category()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/employee_category');
        $this->load->view('footer');
    }
    function employeeCategoryView(){
        $this->datatables->select('EMP_C_ID, EMP_C_NAME, EMP_C_PREFIX, EMP_C_ACTIVE_YN')
        ->from('employee_category');
        echo $this->datatables->generate();
    }
    function employee_department()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/employee_department');
        $this->load->view('footer');
    }
    function employee_grade()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/employee_grade');
        $this->load->view('footer');
    }
    function working_Days()
    {
	$this->load->view('header');
	$this->load->view('hrSetting/working_days');
	$this->load->view('footer');
    }
    function leave_Types()
    {
	$this->load->view('header');
	$this->load->view('hrSetting/leave_type');
	$this->load->view('footer');
    }
    function leaveTypesAdd()
    {
	$this->load->view('header');
	$data['Mode']="Add";
	$this->load->view('hrSetting/leaveTypeAdd',$data);
	$this->load->view('footer');
    }
//    function leaveTypeEdit($type,$code,$date)
//    {
//	$this->load->view('header');
//	$data['Type']=$type;
//	$data['Code']=$code;
//	$data['Date']=$date;
//	$data['Mode']="Edit";
//	$this->load->view('hrSetting/leaveTypeAdd',$data);
//	$this->load->view('footer');
//    }
   function leaveTypeEdit($id)
    {
	$this->load->view('header');
        $data['Mode']="Edit";
	$data['Editdata']=$this->HrSettingModel->leaveTypeEdit($id);
	//print_r($data['Editdata']);exit;
	$this->load->view('hrSetting/leaveTypeAdd',$data);
	$this->load->view('footer');
    }
    function Bank_Details()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/bank_Details');
        $this->load->view('footer');
    }
    function additional_Details()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/additional_Details');
        $this->load->view('footer');
    }
    function employee_position()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/employeePosition');
        $this->load->view('footer');
    }
    function employeeSearch()
    {
        $this->load->view('header');
        $this->load->view('hrSetting/employeeSearch');
        $this->load->view('footer');
    }
    function employeeSearchView(){
	$this->load->view('header');
	$this->load->view('hrSetting/employeeSearch_View');
	$this->load->view('footer');
    }
    function advancedSearch(){
	$this->load->view('header');
	$this->load->view('hrSetting/advancedSearch');
	$this->load->view('footer');
    }
    function employeeDepartmentView(){
        $this->datatables->select('EMP_D_ID, EMP_D_NAME, EMP_D_CODE, EMP_D_STATUS')
        ->from('employee_department');
        echo $this->datatables->generate();
    }
    function employeeGradeView(){
        $this->datatables->select('EMP_G_ID, EMP_G_NAME, EMP_G_PRIORITY, EMP_G_MAX_DAY,EMP_G_MAX_WEEK,EMP_G_ACTIVE_YN')
        ->from('employee_grade');
        echo $this->datatables->generate();
    }
    function employeePositionView(){
        $this->datatables->select('EMP_P_ID, EMP_P_CATEGORY_ID, EMP_P_NAME, EMP_P_ACTIVE_YN')
        ->from('employee_position');
        echo $this->datatables->generate();
    }
    function employeeBankDeatailsView(){
        $this->datatables->select('EMP_BNK_ID, EMP_BNK_NAME, EMP_BNK_ACTIVE_YN')
        ->from('employee_bank_details');
        echo $this->datatables->generate();
    }
    function employeeLeaveTypeView(){
        $this->datatables->select('EMP_L_ID, EMP_L_NAME, EMP_L_CODE,EMP_L_COUNT,EMP_L_VALID_FROM,EMP_L_ALLOW_LEAVE_BAL,EMP_L_ALLOW_BAL_COUNT,EMP_L_ADDI_LEAVE_DED_YN,EMP_L_STATUS')
        ->from('employee_leave_type');
        echo $this->datatables->generate();
    }
}
