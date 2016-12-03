<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hrSettingsC extends CI_Controller {

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
    function leaveTypeEdit($type,$code,$date)
    {
	$this->load->view('header');
	$data['Type']=$type;
	$data['Code']=$code;
	$data['Date']=$date;
	$data['Mode']="Edit";
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
}
