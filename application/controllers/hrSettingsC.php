<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hrSettingsC extends CI_Controller {

//    public function index(){
//	$this->load->view('header');
//	$this->load->view('hrSetting/working_days');
//	$this->load->view('footer');
//    }
    function working_Days(){
	$this->load->view('header');
	$this->load->view('hrSetting/working_days');
	$this->load->view('footer');
    }
    function leave_Types(){
	$this->load->view('header');
	$this->load->view('hrSetting/leave_type');
	$this->load->view('footer');
    }
    function leaveTypesAdd(){
	$this->load->view('header');
	$data['Mode']="Add";
	$this->load->view('hrSetting/leaveTypeAdd',$data);
	$this->load->view('footer');
    }
    function leaveTypeEdit($type,$code,$date){
	$this->load->view('header');
	$data['Type']=$type;
	$data['Code']=$code;
	$data['Date']=$date;
	$data['Mode']="Edit";
	$this->load->view('hrSetting/leaveTypeAdd',$data);
	$this->load->view('footer');
    }
    
    
    
    
    //-----------------------------------------------------------------//
    
    function EmployeeSubjectAssoc(){
	$this->load->view('header');
	$this->load->view('hrSetting/employeeSubjectAssoc');
	$this->load->view('footer');
    }
    
    
    
}
