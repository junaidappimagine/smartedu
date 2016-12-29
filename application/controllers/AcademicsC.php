<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcademicsC extends CI_Controller {
   
   function classrommAllocation(){
      $this->load->view('header');
      $this->load->view('Academics/classrommAllocation');
      $this->load->view('footer');
   }
   function manageBuildings(){
      $this->load->view('header');
      $this->load->view('Academics/ManageBuildings');
      $this->load->view('footer');
   }
   function allocateClassRoom(){
      $this->load->view('header');
      $this->load->view('Academics/AllocateClassroom');
      $this->load->view('footer');
   }
   function addBuildings(){
      $this->load->view('header');
      $data['mode']="View";
      $this->load->view('Academics/addBuildings',$data);
      $this->load->view('footer');
   }
   function editBuildings(){
      $this->load->view('header');
      $data['mode']="Edit";
      $this->load->view('Academics/addBuildings',$data);
      $this->load->view('footer');
   }
   function viewRoom(){
      $this->load->view('header');
      $this->load->view('Academics/viewRoom');
      $this->load->view('footer');
   }
   function addRoom(){
      $this->load->view('header');
      $data['Mode']="Add";
      $this->load->view('Academics/addRoom',$data);
      $this->load->view('footer');
   }
   function editRoom(){
      $this->load->view('header');
      $data['Mode']="Edit";
      $this->load->view('Academics/addRoom',$data);
      $this->load->view('footer');
   }
   function createWeekdays(){
      $this->load->view('header');
      $this->load->view('Academics/createWeekdays');
      $this->load->view('footer');
   }
   function setClassTimings(){
      $this->load->view('header');
      $this->load->view('Academics/setClassTimings');
      $this->load->view('footer');
   }
   function manageTimetable(){
      $this->load->view('header');
      $this->load->view('Academics/manageTimetable');
      $this->load->view('footer');
   }
   function timeTableView(){
      $this->load->view('header');
      $this->load->view('Academics/timeTableView');
      $this->load->view('footer');
   }
   function addClassTiming(){
      $this->load->view('header');
      $data['Mode']="View";
      $this->load->view('Academics/addclasstiming',$data);
      $this->load->view('footer');
   }
   function editClassTiming($title){
      $cars=array(
	 
	       array('classname'=>'Default','si.no'=>'1','periodname'=>'period 1','sttime'=>'09:00','endtime'=>'10:00'),
	       array('classname'=>'Default','si.no'=>'2','periodname'=>'period 2','sttime'=>'10:00','endtime'=>'11:00'),
	       array('classname'=>'Default','si.no'=>'3','periodname'=>'Break','sttime'=>'11:00','endtime'=>'11:10'),
	       array('classname'=>'Default','si.no'=>'4','periodname'=>'period 3','sttime'=>'11:10','endtime'=>'12:10'),
	       array('classname'=>'Default','si.no'=>'5','periodname'=>'period 4','sttime'=>'12:10','endtime'=>'01:10'),
	       
	       array('classname'=>'New','si.no'=>'1','periodname'=>'period 1','sttime'=>'09:00','endtime'=>'10:00'),
	       array('classname'=>'New','si.no'=>'2','periodname'=>'Break','sttime'=>'10:00','endtime'=>'10:10'),
	       array('classname'=>'New','si.no'=>'3','periodname'=>'period 2','sttime'=>'10:10','endtime'=>'11:10'),
	       array('classname'=>'New','si.no'=>'4','periodname'=>'period 3','sttime'=>'11:10','endtime'=>'12:10'),
	       
	       array('classname'=>'Timingset','si.no'=>'1','periodname'=>'period 1','sttime'=>'10:00','endtime'=>'11:00'),
	       array('classname'=>'Timingset','si.no'=>'2','periodname'=>'Break','sttime'=>'11:00','endtime'=>'11:10'),
	       array('classname'=>'Timingset','si.no'=>'3','periodname'=>'period 2','sttime'=>'11:10','endtime'=>'12:10'),
	       
	       array('classname'=>'CLASSTIMINGS','si.no'=>'1','periodname'=>'period 1','sttime'=>'08:00','endtime'=>'09:00'),
	       array('classname'=>'CLASSTIMINGS','si.no'=>'2','periodname'=>'period 2','sttime'=>'10:00','endtime'=>'11:00')
	       
	       );
      $datatable='';
      foreach( $cars as $data ){
	 if($data['classname']==$title){
	    $datatable.="<tr class='currentrow'><td class='sino'>".$data['si.no']."</td><td class='pername'>".$data['periodname']."</td><td class='st'>".$data['sttime']."</td><td class='et'>".$data['endtime']."</td><td><a class='editrow'>Edit</a>  |  <a class='deleterow'>Delete</a></td></tr>";
	 }
      }
      $this->load->view('header');
      $data['Tablerow']=$datatable;
      $data['Name']=$title;
      $data['Mode']="Edit";
      
      $this->load->view('Academics/addclasstiming',$data);
      $this->load->view('footer');
   }
	
	
	//modified by jaya(26-12-2016) -start course
	function manage_courses()
	{
		
		$this->load->view('header');
		$this->load->view('Academics/manage_courses');
		$this->load->view('footer');
	}
	function create_course()
	{
		$data['mode']='add';
		$this->load->view('header');
		$this->load->view('Academics/create_course',$data);
		$this->load->view('footer');
	}
	function edit_course()
	{
		$data['result1']=$this->input->get('var1');
		$data['result2']=$this->input->get('var2');
		$data['result3']=$this->input->get('var3');
		$data['mode']='edit';
		$this->load->view('header');
		$this->load->view('Academics/create_course',$data);
		$this->load->view('footer');
	}
	function manage_course_bacthview()
	{
		$data['result1']=$this->input->get('var1');
		$this->load->view('header');
		$this->load->view('Academics/manage_course_bacthview',$data);
		$this->load->view('footer');
	}
	
	function batchwise_student()
	{
		$this->load->view('header');
		$this->load->view('Academics/batchwise_student');
		$this->load->view('footer');
	}
	function student_view()
	{
		$data['result']=$this->input->get('var1');
		$data['result1']=$this->input->get('var2');
		$data['result2']=$this->input->get('var3');
		$data['result3']=$this->input->get('var4');
		$this->load->view('header');
		$this->load->view('Academics/student_view',$data);
		$this->load->view('footer');
	}
	function new_batch()
	{
      $data['mode']='add';
		$this->load->view('header');
		$this->load->view('Academics/new_batch',$data);
		$this->load->view('footer');
	}
	function edit_batch()
	{
		$data['mode']='edit';
		$data['result1']=$this->input->get('var1');
		$this->load->view('header');
		$this->load->view('Academics/new_batch',$data);
		$this->load->view('footer');
	}
	function group_batch()
	{
		
		$data['result1']=$this->input->get('var1');
		$this->load->view('header');
		$this->load->view('Academics/group_batch',$data);
		$this->load->view('footer');
	}
	
	function assign_sub_amount(){
		$this->load->view('header');
		$this->load->view('Academics/assign_sub_amount');
		$this->load->view('footer');
	}
	//end course
	//start batch
	function manage_batches()
	{
		$this->load->view('header');
		$this->load->view('Academics/manage_batches');
		$this->load->view('footer');
	}
	
	function grading_system()
	{
		$this->load->view('header');
		$this->load->view('Academics/grading_system');
		$this->load->view('footer');
	}
	function batch_transfer()
	{
		$this->load->view('header');
		$this->load->view('Academics/batch_transfer');
		$this->load->view('footer');
	}
	function change_batch()
	{
		$this->load->view('header');
		$this->load->view('Academics/change_batch');
		$this->load->view('footer');
	}
	function graduation()
	{
		$this->load->view('header');
		$this->load->view('Academics/graduation');
		$this->load->view('footer');
	}
	
	function revert_transfer()
	{
		$this->load->view('header');
		$this->load->view('Academics/revert_transfer');
		$this->load->view('footer');
	}
	   function createTimetable(){
      $this->load->view('header');
      $data['Mode']="View";
      $this->load->view('Academics/createTimetable',$data);
      $this->load->view('footer');
   }
   function editTimetable(){
      $this->load->view('header');
      $data['Mode']="Edit";
      $this->load->view('Academics/createTimetable',$data);
      $this->load->view('footer');
   }
   function timetableAllocation(){
      $this->load->view('header');
      $this->load->view('Academics/timetableAllocation');
      $this->load->view('footer');
   }
   function timetableSummary(){
      $this->load->view('header');
      $this->load->view('Academics/timetableSummary');
      $this->load->view('footer');
   }
   function manageBatches(){
      $this->load->view('header');
      $this->load->view('Academics/manageBatches');
      $this->load->view('footer');
   }
   function manageAllocation(){
      $this->load->view('header');
      $this->load->view('Academics/manageAllocation');
      $this->load->view('footer');
   }
   function attendanceRegister()
   {
      $this->load->view('header');
      $this->load->view('Academics/attendanceRegister');
      $this->load->view('footer');
   }
   function attendanceReport()
   {
      $this->load->view('header');
      $this->load->view('Academics/attendanceReport');
      $this->load->view('footer');
   }
   function addReport_pdf_generate()
   {
     $html=$this->load->view('pdf/addReport',$data=array(),true);
     pdf_create($html,"test",$stream=TRUE,'portrait');   
   }
   function manageSubjects()
   {
      $this->load->view('header');
      $this->load->view('Academics/manageSubjects');
      $this->load->view('footer');
   }
   function assingnedElective()
   {
      $this->load->view('header');
      $this->load->view('Academics/assingnedElective');
      $this->load->view('footer');
   }
   function importsubject1()
   {
      $this->load->view('header');
      $this->load->view('Academics/importsubject1');
      $this->load->view('footer');
   }
   function newElective()
   {
      $this->load->view('header');
      $this->load->view('Academics/newElective');
      $this->load->view('footer');
   }
   function importSubject()
   {
      $this->load->view('header');
      $this->load->view('Academics/importSubject');
      $this->load->view('footer');
   }
   
	
}
