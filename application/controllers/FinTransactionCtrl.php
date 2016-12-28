<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinTransactionCtrl extends CI_Controller {
    
    
     function index()
   {
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
   }
    function expense()
    {
        $this->load->view('header');
        $this->load->view('transaction/view_expense');
        $this->load->view('footer');
    }
    function add_expense()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('transaction/add_expense');
    }
    function income()
    {
        $this->load->view('header');
        $this->load->view('transaction/view_income');
        $this->load->view('footer');
    }
    function add_income()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('transaction/add_income');
    }
    function revertedTransaction()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('transaction/revertedTransaction');
    }
    function Create_revert()
    {
        $this->load->view('header');
        $this->load->view('footer');
        $this->load->view('transaction/Create_revert');
    }

}
