<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feesCntrl extends CI_Controller {

   function index()
   {
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
   }
	//start category
    function fees_category()
   {
		$this->load->view('header');
		$this->load->view('fees/fees_category_view');
		$this->load->view('footer');
   }
	function create_category()
   {
		$data["mode"]='add';
		$this->load->view('header');
		$this->load->view('fees/create_category',$data);
		$this->load->view('footer');
   }
	function edit_category()
   {
		$data['result']=$this->input->get('var1');
		$data["mode"]='edit';
		$this->load->view('header');
		$this->load->view('fees/create_category',$data);
		$this->load->view('footer');
   }
	function particular_list()
   {
		$this->load->view('header');
		$this->load->view('fees/particular_list');
		$this->load->view('footer');
   }
	//end category
	
	//start particular
	function fees_particular()
   {
		$this->load->view('header');
		$this->load->view('fees/fees_particular_view');
		$this->load->view('footer');
	}
   function create_particular()
   {
		$data["mode"]='add';
		$this->load->view('header');
		$this->load->view('fees/create_particular',$data);
		$this->load->view('footer');
   }
	function edit_particular()
	{
		$data['result']=$this->input->get('var1');
		$data['result2']=$this->input->get('var2');
		$data['mode']="edit";
		$this->load->view('header');
		$this->load->view('fees/create_particular',$data);
		$this->load->view('footer');
	}
	//end particluar
	//start discount
	function fees_discount()
	{
		$this->load->view('header');
		$this->load->view('fees/fees_discount_view');
		$this->load->view('footer');
	}
	
	function create_discount()
   {
		$data["mode"]='add';
		$this->load->view('header');
		$this->load->view('fees/create_discount',$data);
		$this->load->view('footer');
   }
	
	function edit_discount()
   {
		$data["mode"]='edit';
		$data['result']=$this->input->get('var1');
		$data['result1']=$this->input->get('var2');
		$data['result2']=$this->input->get('var2');
		$this->load->view('header');
		$this->load->view('fees/create_discount',$data);
		$this->load->view('footer');
   }
	//end discount
	//start fine
	function fees_fine()
	{
		$this->load->view('header');
		$this->load->view('fees/fees_fine_view');
		$this->load->view('footer');
	}
	
	function create_fine()
   {
		$data["mode"]='add';
		$this->load->view('header');
		$this->load->view('fees/create_fine',$data);
		$this->load->view('footer');
   }
	
	function edit_fine()
   {
		$data["mode"]='edit';
		$data['result']=$this->input->get('var1');
		$data['result1']=$this->input->get('var2');
		$data['result2']=$this->input->get('var3');
		$this->load->view('header');
		$this->load->view('fees/create_fine',$data);
		$this->load->view('footer');
   }
}
