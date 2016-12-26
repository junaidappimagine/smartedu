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
}
