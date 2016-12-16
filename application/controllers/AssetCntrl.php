<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssetCntrl extends CI_Controller {
function __construct(){
   parent::__construct();
      $this->load->helper('dompdf_helper');
      $this->load->library('session');
      $this->load->helper('url');
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
    function createAsset_edit()
   {
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
    function liability_edit()
   {
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
}
?>