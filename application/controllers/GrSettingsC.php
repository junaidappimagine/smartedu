<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrSettingsC extends CI_Controller {
function __construct(){
   parent::__construct();
      //$this->load->helper('dompdf_helper');
      //$this->load->library('session');
      $this->load->helper('url');
   }
   function index()
   {
      $this->load->view('header');
      $this->load->view('dashboard');
      $this->load->view('footer');
   }
   function generalSettingView()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/generalSettingView');
      $this->load->view('footer');
   }
   function smsSettings()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/smsSettings');
      $this->load->view('footer');
   }
   function smslogs()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/smslogs');
      $this->load->view('footer');
   }
   function smsView()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/smsView');
      $this->load->view('footer');
   }
   function sendStudents()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/sendStudents');
      $this->load->view('footer');
   }
   function sendBatches()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/sendBatches');
      $this->load->view('footer');
   }
   function sendEmployees()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/sendEmployees');
      $this->load->view('footer');
   }
   function sendEmployeeDepartment()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/sendEmployeeDepartment');
      $this->load->view('footer');
   }
   function sendAll()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/sendAll');
      $this->load->view('footer');
   }
}
?>