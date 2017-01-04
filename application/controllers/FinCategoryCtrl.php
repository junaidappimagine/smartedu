<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinCategoryCtrl extends CI_Controller {
	function __construct(){
   parent::__construct();
      $this->load->helper('dompdf_helper');
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->library('Datatables');    
   }

     function index()
   {
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
   }
	function finCategoryview()
	{
            $this->load->view('header');
            $this->load->view('category/finCategoryview');
            $this->load->view('footer');
	}
	function  Create_fin_Category()
	{
	    $this->load->view('header');
            $this->load->view('footer');
            $data['mode']='add';
            $this->load->view('category/CreateCategory',$data);
	}
	function Edit_fin_Category($id){
		
	    $this->load->view('header');
            $this->load->view('footer');
            $data["row_id"]=$id;
            $data['val1']=$this->input->get('var1');
            $data['mode']='edit';
            $this->load->view('category/CreateCategory',$data);
	}

	// Created View by Vijayaraj 4-1-17

	function fetchCategoryView(){
      $this->datatables->select('FINC_CA_ID, FINC_CA_NAME, FINC_CA_DESC')
      ->from('finance_category');
      echo $this->datatables->generate();
    }
}
