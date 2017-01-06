<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventCtrl extends CI_Controller {
   
   function eventCreation(){
      $this->load->view('header');
      $this->load->view('Events/eventCreation');
      $this->load->view('footer');
   }
  
 
   
}
