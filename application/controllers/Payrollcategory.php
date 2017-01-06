<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payrollcategory extends CI_Controller {
	function __construct(){
	parent::__construct();
	   $this->load->helper('dompdf_helper');
	   $this->load->library('session');
	   $this->load->helper('url');
	   $this->load->library('Datatables');    
	}
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
		$this->load->view('payroll/createpayroll');
	}
	function Payroll_Categoryview()
	{
		$this->load->view('header');
		$this->load->view('payroll/Payroll_Categoryview');
		$this->load->view('footer');
	}
	function  Create_Payroll_Category()
	{
	    $this->load->view('header');
		$this->load->view('footer');
		$data['mode']='add';
		$this->load->view('payroll/Createpayroll',$data);
	}
	function  Payroll_Categorydetails(){ 
		
		$this->load->view('header');
		$this->load->view('footer');
		
		$data['val1']=$this->input->get('var1');
		$data['val2']=$this->input->get('var2');
		$data['val3']=$this->input->get('var3');
		//print_r($data1); exit;
		
		$this->load->view('payroll/Payroll_Categorydetails',$data);
	}
	function Edit_Payroll_Category(){
		
	        $this->load->view('header');
		$data['mode']='edit';
		$this->load->view('payroll/Createpayroll',$data);
		$this->load->view('footer');
	}
	
	function fetchP_categoryView(){
		
		$this->datatables->select('PR_C_H_ID, PR_C_H_NAME, PR_C_H_CODE,PR_C_H_TYPE,PR_C_H_VAL_TYPE,PR_C_L_DEFAULT_VAL')
		->from('payroll_category_head,');
		echo $this->datatables->generate();
		//print_r($res);
		//exit;
	}

}
