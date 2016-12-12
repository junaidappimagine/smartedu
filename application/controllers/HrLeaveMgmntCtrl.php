<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HrLeaveMgmntCtrl extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('hrleavemgmntmodel','hrleave_mgmnt');
	}
	function AttendanceRegister(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/AttendanceRegister');
		$this->load->view('footer');
	}
	function AttendanceReport(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/AttendanceReport');
		$this->load->view('footer');
	}
	function CSVReports(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/CSVReport');
		$this->load->view('footer');
	}
	function LeaveRest(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/LeaveRest');
		$this->load->view('footer');
	}
	function ResetLeaves(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/ResetLeaves');
		$this->load->view('footer');
	}
	function ResetAllEmployees(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/ResetAllEmployees');
		$this->load->view('footer');
	}
	function LeaveResetSetting(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/LeaveResetSetting');
		$this->load->view('footer');
	}
	function LeaveApplication(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/LeaveApplication');
		$this->load->view('footer');
	}
	function Resetemployeeleaves(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/Resetemployeeleaves');
		$this->load->view('footer');
	}
	function resetLogs(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/ResetLogs');
		$this->load->view('footer');
	}
	function employeeLeaveDetails(){
		$this->load->view('header');
		$this->load->view('HrLeaveManagement/EmployeeLeaveDetails');
		$this->load->view('footer');
	}
	 
}
