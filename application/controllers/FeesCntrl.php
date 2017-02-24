<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeesCntrl extends CI_Controller {
   function __construct(){
      parent::__construct();
     
      $this->load->model('financefeesmod');
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->library('Datatables');
      $this->load->library('email');
      //$this->load->helper('dompdf_helper');
      //$this->load->helper('dompdf/dompdf_config');
     $this->load->helper('dompdf_helper');
      //$this->load->helper('dompdf/dompdf_config');
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
    function feeCollection_pdf_generate()
    {
   
      $html=$this->load->view('pdf/feeCollection',$data=array(),true);
      pdf_create($html,"test",$stream=TRUE,'portrait');   
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
//   public function feesDefaulterEmail()
//	{
//	 
//	     $config = Array(
//			'protocol' => 'smtp',
//			'smtp_host' => 'ssl://smtp.googlemail.com',
//			'smtp_port' => 465,
//			'smtp_user' => 'manisrikan@gmail.com', // change it to yours
//			'smtp_pass' => '16121993', // change it to yours
//			'mailtype' => 'html',
//			'charset' => 'iso-8859-1',
//			'wordwrap' => TRUE
//		);
//	    $this->email->initialize($config);
//	    $this->load->library('email', $config);
//	    $EmailPerson = $_POST['EmailId'];
//	    //print_r($EmailPerson);exit;
//	    $html = $this->goodReceiptDocumentEmail($UniqEmailsend='email');
//	    $htmlpdf = $this->goodReceiptDocumentEmail($UniqEmailsend='pdf');
//	    //print_r($htmlpdf);
//	    //exit;
//	    require_once('../helpers/dompdf/dompdf_config.inc.php');
//	    $dompdf = new DOMPDF();
//	   
//	    $dompdf->load_html($htmlpdf);
//	    
//	    $dompdf->render();
//	    $output = $dompdf->output();
//	    
//	    $FileName = 'FeeDefaulter';
//	    
//	    $FileNm = str_replace(' ','',$FileName);
//	    
//	    $SaleOrder = file_put_contents("application/uploads/".$FileName.".pdf", $output);
//	  
//	    //$directoryPath = set_realpath('application/uploads/');
//	   
//	    $config['upload_path'] = 'application/uploads/';
//	    //print_r($config['upload_path']);
//	    //exit;
//
//	    $this->email->set_newline("\r\n");
//	    $this->email->from('manisrikan@gmail.com','Ruby Campus');
//	    $this->email->to($EmailPerson);
//	    //$this->email->cc();
//	    $this->email->subject('Hai Vijay');
//	    $this->email->message($html);
//	    
//	    $this->email->attach($config['upload_path'].''.$FileName.'.pdf');
//	    
//	    if($this->email->send())
//	    {
//		
//	    }
//	    $this->email->clear(TRUE);
//	 
//
//    }
//     public function goodReceiptDocumentEmail($UniqEmailsend)
//    {
//	$time = time();
//	    if($UniqEmailsend=='email')
//	    {
//	    
//		return $this->load->view('fees/Email/feeDefaulterEmail',"",true);
//	
//	    }else if($UniqEmailsend=='pdf'){
//		return $this->load->view('fees/PrintDocument/emailprint/feeDefaulter',"",true);
//		
//	    }
//	    else {
//		return $this->load->view('fees/PrintDocument/feeDefaulterRec',"",true);
//	    }
//    }
      function getmail_id(){
	 $json = file_get_contents('php://input');
	 $result = json_decode($json, TRUE);
	 $id =$result['ID'];
	 $res = $this->financefeesmod->getmail_id($id);
	 //print_r($res);exit;
	 echo $res[0]['EMP_EMAIL'];
      }
      function getpdf_id(){
	 $json = file_get_contents('php://input');
	 $result = json_decode($json, TRUE);
	 $id =$result['ID'];
	 $res = $this->financefeesmod->getname_id($id);
	 //print_r($res);exit;
	 echo $res[0]['EMP_NAME'];
      }
   
   
   
   
      function payslip_Multiple_Data(){
	 $this->datatables->select('EMP_ID,EMP_NAME,BASIC_SALARY,INCENTIVE,TRAVELLING_ALLOWANCE,HRA,DA,GROSS_EARNINGS,LOP,ADVANCE_SALARY,OTHER_DEDUCTIONS,GROSS_DEDUCTIONS,NET_AMOUNT,EMP_DEPARTMENT,EMP_EMAIL,SALARY_PAID,TOTAL_WORKING_DAYS,WORKED_DAYS,INCREMENT,ID,CR_DATE,UPDATED_DATE,PAYSLIP_NO,REMARKS,MONTH_YEAR')->from('payroll_details');
	 echo $this->datatables->generate();
     }
     function Multiple_send_email(){

	$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'manisrikan@gmail.com', // change it to yours
	    'smtp_pass' => '16121993', // change it to yours
	    'mailtype' => 'html',
	    'charset' => 'iso-8859-1',
	    'wordwrap' => TRUE
	);
	    $this->email->initialize($config);
	    $this->load->library('email', $config);
	    //$name=$_POST['names'];
	    //$mail=$_POST['mail_id'];
	    $json = file_get_contents('php://input');
	    $result = json_decode($json, TRUE);
	    $mail =array($result['mail_id']);
	    $id =$result['id'];
	    //print_r($id);exit;
	    $tot=count($id);
	   
	     for ($i = 0; $i <$tot; $i++) {
		//echo $id[$i];
		$EEEmail="";
		$MultiFileName="";
		$html = $this->Multiple_email($id[$i],$UniqEmailsend='email');
		$htmlpdf = $this->Multiple_email($id[$i],$UniqEmailsend='pdf');
		require_once('../helpers/dompdf/dompdf_config.inc.php');
		$dompdf = new DOMPDF();
		//$dompdf->set_paper('A4','landscape');
		$dompdf->load_html($htmlpdf);
		$dompdf->render();
		$output = $dompdf->output();
		
		$FileName = 'RubyReport';
		$MultiFileName = $FileName.'.pdf';
		
		$Payslip = file_put_contents("application/uploads/$MultiFileName",$output);
		
		$this->email->set_newline("\r\n");
		$this->email->from('manisrikan@gmail.com','Ruby');
		$this->email->to($mail[$i]);
		 //echo $mail;exit;
		$this->email->subject('Report');
	        $this->email->message($html);
		$EEEmail=$this->email->attach("application/uploads/".$MultiFileName);
		//print_r($EEEmail);exit;
		$this->email->send();
		$this->email->clear(TRUE);
	   }
	   //exit;
	     //unlink('http://cloudlogic.in/payslip/application/uploads/$MultiFileName');
    }
   

    function Multiple_email($id,$UniqEmailsend){
	
	 $value['resDetails']=$this->financefeesmod->getMail_details($id);
	 //print_r($value['resDetails']);exit;
	//$getslip['datas1']=$this->financefeesmod->getfrom_salaryMail($name);
	//print_r($getslip['datas1']);exit;
	//return $dataa=$this->load->view('test1',$getslip,true);
	  if($UniqEmailsend=='email')
	    {
	    
		return $this->load->view('fees/Email/feeDefaulterEmail',"$value",true);
	
	    }else if($UniqEmailsend=='pdf'){
		return $this->load->view('fees/PrintDocument/emailprint/feeDefaulter',"$value",true);
		
	    }
	    else {
		return $this->load->view('fees/PrintDocument/feeDefaulterRec',"$value");
	    }
    }
    function defaulter_pdf_generate($id)
    {
       $value['resDetails'] = $this->financefeesmod->getPdf_details($id);
	 $html=$this->load->view('fees/PrintDocument/emailprint/feeDefaulter',$value,true);
	 pdf_create($html,"test",$stream=TRUE,'portrait');
//      print_r($id);exit;
//      $json = file_get_contents('php://input');
//      $resData = json_decode($json, TRUE);
//      $total= $resData['pdfId'];
//      for($i=0;$i<count($total);$i++){
//	 $value['resDetails'] = $this->financefeesmod->getPdf_details($total[$i]);
//	 $html=$this->load->view('fees/PrintDocument/emailprint/feeDefaulter',$value,true);
//	 pdf_create($html,"test",$stream=TRUE,'portrait');
//      }
      //exit;
      
      //$value['resDetails'] = $this->financefeesmod->getPdf_details(2);
      //$html=$this->load->view('fees/PrintDocument/emailprint/feeDefaulter',$value,true);
      //pdf_create($html,"test",$stream=TRUE,'portrait');
     // print_r($resData);exit;
     //$total1 = count($resData['pdfId']);
     //echo 't_counttt'.$total1;
      //exit;
      //$resId = $resData['pdfId'];
      // 
      //$total = count($resId);
      ////print_r($total);exit;
      //var_dump($total);exit;
      //for($i=0;$i<$total1;$i++){
      // //$html=$this->load->view('pdf/default',$data=array(),true);
      // //pdf_create($html,"test",$stream=TRUE,'portrait');
      // echo $i;
      // echo "<br>";
      //}
       
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
