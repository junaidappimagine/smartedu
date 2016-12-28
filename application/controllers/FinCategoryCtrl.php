<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FinCategoryCtrl extends CI_Controller {
	
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
	function Edit_fin_Category(){
		
	    $this->load->view('header');
            $this->load->view('footer');
            $data['val1']=$this->input->get('var1');
            $data['mode']='edit';
            $this->load->view('category/CreateCategory',$data);
	}
}
