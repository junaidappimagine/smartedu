<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HR_EmployeeMgmnt extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('hr_employee_mgmnt','emp_mgmnt');
	}
	function EmployeeAdmission(){
		$this->load->view('header');
		$this->load->view('HREmployeeManagement/EmployeeAdmission');
		$this->load->view('footer');

	}
	function AddPayroll(){
		$this->load->view('header');
		$this->load->view('HREmployeeManagement/AddPayroll');
		$this->load->view('footer');

	}
	function EmployeeSubjectAssociation(){
		$this->load->view('header');
		$this->load->view('HREmployeeManagement/EmployeeSubjectAssociation');
		$this->load->view('footer');
	}
	function tabletest(){
		$this->load->view('header');
		$this->load->view('HREmployeeManagement/testtable');
		$this->load->view('footer');
	}
}
