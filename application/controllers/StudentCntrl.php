<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentCntrl extends CI_Controller {
   function __construct(){
      parent::__construct();
      $this->load->helper('dompdf_helper');
      //$this->load->model('payroll/payslipmodel');
      $this->load->library('session');
      $this->load->helper('url');
    }
   function index()
   {
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
   }
   function student_detail()
   {
		$this->load->view('header');
		$this->load->view('student/student_detail');
		$this->load->view('footer');
   }
	function student_view_all()
   {
		$this->load->view('header');
		$this->load->view('student/student_view_all');
		$this->load->view('footer');
   }
	function advanced_search()
   {
		$this->load->view('header');
		$this->load->view('student/advanced_search');
		$this->load->view('footer');
   }
	function admission()
   {
		$this->load->view('header');
		$this->load->view('student/admission');
		$this->load->view('footer');
   }
	function manage_student_cat()
	{
		$data["mode"]='add';
		$this->load->view('header');
		$this->load->view('student/manage_category',$data);
		$this->load->view('footer');
	}
	function edit_category()
	{
      $data["mode"]='edit';
		$data['result']=$this->input->get('var1');
		$this->load->view('header');
		$this->load->view('student/manage_category',$data);
		$this->load->view('footer');
	}
	function manage_roll()
	{
		$this->load->view('header');
		$this->load->view('student/manage_roll');
		$this->load->view('footer');
	}
	function edit_roll_number(){
		 
	   $data['result']=$this->input->get('var1');
		$this->load->view('header');
		$this->load->view('student/edit_roll_number',$data);
		$this->load->view('footer');
	}
	
}