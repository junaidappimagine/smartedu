<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payrollgroup extends CI_Controller {

    public function index()
    {
     $this->load->view('header');
     $this->load->view('footer');
     $this->load->view('payroll/payrollgroupview');
    }
    function payrollgroup_Employees_view(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/payrollgroup_employee_view');
    }
    function payrollgroup_Assign_Employees(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/payrollgroup_assign_employee');
    }
    function assign_Payrollgroup_View(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/assign_payroll_group_view');
    }
    function assign_Payrollgroup_Edit(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/assign_payroll_group_edit');
    }
    function change_Payrollgroup_View(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/change_payroll_group_view');
    }
    function change_Payrollgroup_Edit(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/change_payroll_group_edit');
    }
    function view_Payroll(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/view_payroll');
    }
    function edit_Payroll(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/edit_payroll');
    }
    function Add_Payroll_Groupview(){
	$this->load->view('header');
	$this->load->view('footer');
	$this->load->view('payroll/Create_Payroll_Groupview');
    }
    function Payroll_view(){
	$this->load->view('header');
	$this->load->view('payroll/Payroll_view');
	$this->load->view('footer');
    }
    function Payroll_Edit(){
	$this->load->view('header');
	$this->load->view('payroll/Payroll_Edit');
	$this->load->view('footer');
    }
}
