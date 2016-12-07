<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HrLeaveMgmntCtrl extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('hrleavemgmntmodel','hrleave_mgmnt');
	}
	function AttendanceRegister(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/AttendanceRegister');
	}
	function AttendanceReport(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/AttendanceReport');
	}
	function CSVReports(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/CSVReport');
	}
	function LeaveRest(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/LeaveRest');
	}
	function ResetLeaves(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/ResetLeaves');
	}
	function ResetAllEmployees(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/ResetAllEmployees');
	}
	function LeaveResetSetting(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/LeaveResetSetting');
	}
	function LeaveApplication(){
		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('HrLeaveManagement/LeaveApplication');
	}
}
