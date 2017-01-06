<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailCtrl extends CI_Controller {
   
   function emailInbox(){
      $this->load->view('header');
      $this->load->view('Email/emailInbox');
      $this->load->view('footer');
   }
    function composeMail(){
      $this->load->view('header');
      $this->load->view('Email/composeMail');
      $this->load->view('footer');
   }
 
   
}
