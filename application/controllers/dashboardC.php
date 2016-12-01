<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardC extends CI_Controller {

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
	function __construct(){
	    parent::__construct();
	}
	function index(){
	    $this->load->view('header');
	    $this->load->view('dashboard');
	    $this->load->view('footer');
	}
	function Assign_Employees(){
	    $this->load->view('header');
	    $this->load->view('footer');
	    $this->load->view('payroll/payrollgroup_assign_employee');
	}
	function Payroll_Categoryview(){
	    $this->load->view('header');
	    $this->load->view('payroll/Payroll_Categoryview');
	    $this->load->view('footer');
	}
	function employee_category(){
	    $this->load->view('header');
	    $this->load->view('payroll/employee_category');
	    $this->load->view('footer');
	}
}
