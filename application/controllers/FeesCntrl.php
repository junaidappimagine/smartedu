<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeesCntrl extends CI_Controller {
   function __construct(){
      parent::__construct();
      $this->load->helper('dompdf_helper');
      //$this->load->model('payroll/payslipmodel');
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
	//end fine
	
	//start schedule fee collection
	function schedule_fee_collection()
	{
		$this->load->view('header');
		$this->load->view('fees/schedule_fee_collection');
		$this->load->view('footer');
	}
	function create_fee_collection()
   {
		$data["mode"]='add';
		$this->load->view('header');
		$this->load->view('fees/create_fee_collection',$data);
		$this->load->view('footer');
   }
	function edit_fee_collection($id)
	{
	        $data["row_id"]=$id;
		$data["mode"]='edit';
		$this->load->view('header');
		$this->load->view('fees/create_fee_collection',$data);
		$this->load->view('footer');
   }
	function fee_collection_list()
   {
		$data['result']=$this->input->get('var1');
		$data['result1']=$this->input->get('var2');
		$this->load->view('header');
		$this->load->view('fees/fee_collection_list',$data);
		$this->load->view('footer');
   }
	//schedule fee collection
	//start fee collection
	function fee_collection()
	{
		$this->load->view('header');
		$this->load->view('fees/fee_collection');
		$this->load->view('footer');
	}
	 function ViewRefundRules()
   {
	        $this->load->view('header');
		$this->load->view('fees/ViewRefundRules');
		$this->load->view('footer');
   }
    function createRefundRule()
   {
      $data["mode"]='add';
      $this->load->view('header');
      $this->load->view('fees/createRefundRule',$data);
      $this->load->view('footer');
   }
   function refundRule_edit()
   {
      $data["mode"]='edit';
      $this->load->view('header');
      $this->load->view('fees/createRefundRule',$data);
      $this->load->view('footer');
   }
   function view_refund()
   {
      $this->load->view('header');
      $this->load->view('fees/view_refund');
      $this->load->view('footer');
   }
    function apply_refund()
   {
      $this->load->view('header');
      $this->load->view('fees/applyRefund');
      $this->load->view('footer');
   }
   function refund_pdf_generate()
    {
      $html=$this->load->view('pdf/refund',$data=array(),true);
      pdf_create($html,"test",$stream=TRUE,'portrait');   
    }
   function feesDefaulters()
   {
      $this->load->view('header');
      $this->load->view('fees/feesDefaulters');
      $this->load->view('footer');
   }
    function defaulter_pdf_generate()
    {
      $html=$this->load->view('pdf/default',$data=array(),true);
      pdf_create($html,"test",$stream=TRUE,'portrait');   
    }
    function payFees()
   {
      $this->load->view('header');
      $this->load->view('fees/payFees');
      $this->load->view('footer');
   }
   function fetchScheduleFeeView(){
      $this->datatables->select('FINC_SCH_ID,FINC_SCH_FEE_CA_ID,FINC_SCH_NAME,FINC_SCH_FI_ID,FINC_SCH_START_DT,FINC_SCH_END_DT,FINC_SCH_ACTIVE_YN')
      ->from('finance_schedule');
      echo $this->datatables->generate();
    }
}
