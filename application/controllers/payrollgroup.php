<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payrollgroup extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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
	
}
