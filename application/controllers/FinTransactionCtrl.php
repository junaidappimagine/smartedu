<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinTransactionCtrl extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Datatables');    
    }
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

    // Written by Vijayaraj 4-1-17
    function showExpenseView(){
      $this->datatables->select('FINC_TXN_EX_ID, FINC_TXN_EX_CA_ID,FINC_TXN_EX_TITLE, FINC_TXN_EX_DESC,FINC_TXN_EX_AMT,FINC_TXN_EX_DT,FINC_TXN_EX_STATUS')
      ->from('finance_txn_expense');
      echo $this->datatables->generate();
    }
    function showIncomeView(){
      $this->datatables->select('FINC_TXN_IN_ID,FINC_TXN_IN_CA_ID, FINC_TXN_IN_TITLE, FINC_TXN_IN_DESC,FINC_TXN_IN_AMT,FINC_TXN_IN_DT,FINC_TXN_IN_STATUS')
      ->from('finance_txn_income');
      echo $this->datatables->generate();
    }
}
