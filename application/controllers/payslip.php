<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payslip extends CI_Controller {
    
    function __construct(){
	parent::__construct();
	$this->load->helper('dompdf_helper');
	//$this->load->model('payroll/payslipmodel');
	$this->load->library('session');
	$this->load->helper('url');
    }

    function index(){
	$this->load->view('header');
	$this->load->view('dashboard');
	$this->load->view('footer');
    }
    
    function generate_payslips(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_genarate');
	$this->load->view('footer');
    }
    
    function payslipFor_employees(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_employees');
	$this->load->view('footer');
    }
     function generate_payslip(){
	$data['result']=$this->input->get('var1');
        $data['result1']=$this->input->get('var2');
	$this->load->view('header');
	$this->load->view('payroll/generate_payslip',$data);
	$this->load->view('footer');
    }
    function generatedPayslips_view(){
	$this->load->view('header');
	$this->load->view('payroll/generatedPayslips_view');
	$this->load->view('footer');
    }
    
     function view_Payroll(){
	$this->load->view('header');
	$data['mode']="View";
	$this->load->view('payroll/view_Payroll',$data);
	$this->load->view('footer');
    }
    
     function viewPayslip(){
	$data['result']=$this->input->get('var1');
        $data['result1']=$this->input->get('var2');
	$data['result2']=$this->input->get('var3');
	$data['result3']=$this->input->get('var4');
	$this->load->view('header');
	$this->load->view('payroll/viewPayslip',$data);
	$this->load->view('footer');
    }
    
    function pdf_generate()
    {
	$html=$this->load->view('pdf/generatePdf',$data=array(),true);
	pdf_create($html,"test",$stream=TRUE,'portrait');   
    }
    
    function rejected_payslip(){
	$this->load->view('header');
	$this->load->view('payroll/rejected_payslip');
	$this->load->view('footer');
    }
    
    function EmpPayslip(){
        $this->load->view('header');
        $this->load->view('payroll/reportPayslip');
	$this->load->view('footer');
    }
    
    function ViewEmployee(){
        $data['result']=$this->input->get('var1');
        $data['result1']=$this->input->get('var2');
        $this->load->view('header');
        $this->load->view('payroll/viewEmpPayslipReport', $data);
	$this->load->view('footer');
    }
    
    function payslip_payrollgroup_view(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_payrollgroup_view');
	$this->load->view('footer');
    }
    
    function view_Employee(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_employee_view');
	$this->load->view('footer');
    }
    
    function genaratePayslip(){
	$this->load->view('header');
	$this->load->view('payroll/generate_payslip');
	$this->load->view('footer');
    }
    
    function generate_payslip_all(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_generate_all');
	$this->load->view('footer');
    }
    
    function view_Generate_Payslip(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_generate_view');
	$this->load->view('footer');
    }
    
    function view_Payroll_Payslip_New(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_generate_view_new');
	$this->load->view('footer');
    }
    
    function payslip_view_all(){
	$this->load->view('header');
	$this->load->view('payroll/payslip_view_all');
	$this->load->view('footer');
    }
    
}
