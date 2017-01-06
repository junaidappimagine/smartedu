<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GrSettingsC extends CI_Controller {
function __construct(){
   parent::__construct();
      $this->load->helper('dompdf_helper');
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('default_model');
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
   function users()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/users');
      $this->load->view('footer');
   }
   function addNew()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/addNew');
      $this->load->view('footer');
   }
   function userView()
   {
      $this->load->view('header');
      $result['usertype']=$this->default_model->fetchAllUserType();
      $this->load->view('GeneralSettings/userView',$result);
      $this->load->view('footer');
   }
   function userProfile()
   {
      $this->load->view('header');
      $result=$this->default_model->fetchAdmissionDetails();
      $this->load->view('GeneralSettings/userProfile');
      $this->load->view('footer');
   }
   function profile()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/profile');
      $this->load->view('footer');
   }
   function editGeneralDetails()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/editGeneralDetails');
      $this->load->view('footer');
   }
   function profile_pdf_generate()
   {
     $html=$this->load->view('pdf/pdfProfile',$data=array(),true);
     pdf_create($html,"test",$stream=TRUE,'portrait');   
   }
   function changePassword()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/changePassword');
      $this->load->view('footer');
   }
   function change()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/change');
      $this->load->view('footer');
   }
   function bankDetails()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/bankDetails');
      $this->load->view('footer');
   }
   function additionalInfo()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/additionalInfo');
      $this->load->view('footer');
   }
   function messages()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/messages');
      $this->load->view('footer');
   }
   function editPersonal()
   {
      $this->load->view('header');
      $this->load->view('GeneralSettings/editPersonal');
      $this->load->view('footer');
   }

   // Created by Viayaraj 06-01-16
   function fetchUserView(){
      $this->datatables->select('USER_ID,USER_FIRST_NAME,USER_LAST_NAME,USER_PASSWORD,USER_TYPE,USER_UNIQ_VALUE')
      ->from('user');
      echo $this->datatables->generate();
    }
    function employeeAdmissionView(){
      $this->datatables->select('EMP_ID,EMP_FIRST_NAME,EMP_DEPT,EMP_CATEGORY,EMP_POSITION,EMP_GRADE')
      ->from('employee_admission');
      echo $this->datatables->generate();
    }
}
?>