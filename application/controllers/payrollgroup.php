<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payrollgroup extends CI_Controller {

    public function index()
    {
     $this->load->view('header');
     $this->load->view('payroll/payrollgroupview');
     $this->load->view('footer');
    }
    function payrollgroup_Employees_view(){
	$this->load->view('header');
	$this->load->view('payroll/payrollgroup_employee_view');
	$this->load->view('footer');
    }
    function Create_Payroll_Groupview(){
	$this->load->view('header');
	$this->load->view('payroll/payrollgroupview');
	$this->load->view('footer');
    }
    function payrollgroup_Assign_Employees(){
	$this->load->view('header');
	$this->load->view('payroll/payrollgroup_assign_employee');
	$this->load->view('footer');
    }
    function assign_Payrollgroup_View(){
	$this->load->view('header');
	$data['mode']="View";
	$this->load->view('payroll/assign_payroll_group_view',$data);
	$this->load->view('footer');
    }
    function assign_Payrollgroup_Edit(){
	$this->load->view('header');
	$data['mode']="Edit";
	$this->load->view('payroll/assign_payroll_group_view',$data);
	$this->load->view('footer');
    }
    function change_Payrollgroup_View(){
	$this->load->view('header');
	$data['mode']="View";
	$this->load->view('payroll/change_payroll_group_view',$data);
	$this->load->view('footer');
    }
    function change_Payrollgroup_Edit(){
	$this->load->view('header');
	$data['mode']="Edit";
	$this->load->view('payroll/change_payroll_group_view',$data);
    	$this->load->view('footer');
    }
    function view_Payroll(){
	$this->load->view('header');
	$data['mode']="View";
	$this->load->view('payroll/view_payroll',$data);
	$this->load->view('footer');
    }
      function edit_Payroll(){
	$this->load->view('header');
	$data['mode']="Edit";
	$this->load->view('payroll/view_payroll',$data);
    	$this->load->view('footer');
    }
    function Add_Payroll_Groupview(){
	    $this->load->view('header');
	    $data['mode']='add';
	    $this->load->view('payroll/Create_Payroll_Groupview',$data);
	    $this->load->view('footer');
	}
    function Payroll_view(){
	    $this->load->view('header');
	    $this->load->view('payroll/Payroll_view');
	    $this->load->view('footer');
	}
    function Payroll_Edit(){
	    $this->load->view('header');
	    $data['mode']='edit';
	    $this->load->view('payroll/Create_Payroll_Groupview',$data);
	    $this->load->view('footer');
	}
	function Assign_Employees(){
	    $this->load->view('header');
	    $this->load->view('payroll/payrollgroup_assign_employee');
	    $this->load->view('footer');
	}
	
}
