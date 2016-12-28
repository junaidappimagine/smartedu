<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinDonationCtrl extends CI_Controller {
    
     function index()
   {
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
   }
    function addNewDonation()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('donation/addNewDonation');
    }
    function  Create_NewFields()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('donation/addNewFields');
    }
    
}
