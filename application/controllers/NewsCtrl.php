<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsCtrl extends CI_Controller {
   
   function viewNews(){
      $this->load->view('header');
      $this->load->view('News/viewNews');
      $this->load->view('footer');
   }
   function addNews(){
      $this->load->view('header');
      $this->load->view('News/addNews');
      $this->load->view('footer');
   }
 
   
}
