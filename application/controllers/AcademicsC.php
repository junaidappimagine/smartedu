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
   function editClassTiming(){
      $this->load->view('header');
      $data['Mode']="Edit";
      $this->load->view('Academics/addclasstiming',$data);
      $this->load->view('footer');
   }
}
