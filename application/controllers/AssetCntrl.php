<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssetCntrl extends CI_Controller {
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
    function assetView()
   {
      $this->load->view('header');
      $this->load->view('Asset/assetView');
      $this->load->view('footer');
   }
   function createAsset()
   {
      $data["mode"]='add';
      $this->load->view('header');
      $this->load->view('Asset/createAsset',$data);
      $this->load->view('footer');
   }
    function createAsset_edit($id)
   {
      $data["row_id"]=$id;
      $data["mode"]='edit';
      $this->load->view('header');
      $this->load->view('Asset/createAsset',$data);
      $this->load->view('footer');
   }
   function asset_pdf_generate()
    {
      $html=$this->load->view('pdf/asset',$data=array(),true);
      pdf_create($html,"test",$stream=TRUE,'portrait');   
    }
   function liabilityView()
   {
      $this->load->view('header');
      $this->load->view('Asset/liabilityView');
      $this->load->view('footer');
   }
   function createLiability()
   {
      $data["mode"]='add';
      $this->load->view('header');
      $this->load->view('Asset/createLiability',$data);
      $this->load->view('footer');
   }
    function liability_edit($id)
   {
      $data["row_id"]=$id;
      $data["mode"]='edit';
      $this->load->view('header');
      $this->load->view('Asset/createLiability',$data);
      $this->load->view('footer');
   }
    function liability_pdf_generate()
    {
      $html=$this->load->view('pdf/liability',$data=array(),true);
      pdf_create($html,"test",$stream=TRUE,'portrait');   
    }

  // Written By Vijayaraj 4-1-17

    function fetchAssetView(){
      $this->datatables->select('FINC_AS_ID, FINC_AS_TITLE, FINC_AS_DESC,FINC_AS_AMT,FINC_AS_CRT_DT')
      ->from('finance_asset');
      echo $this->datatables->generate();
    }

    function fetchLiabilityView(){
      $this->datatables->select('FINC_LI_ID, FINC_LI_TITLE, FINC_LI_DESC,FINC_LI_AMT,FINC_LI_CRT_DT')
      ->from('finance_liability');
      echo $this->datatables->generate();
    }
}
?>