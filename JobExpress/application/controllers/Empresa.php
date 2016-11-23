<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller{

  public function __construct()
  {
    define('NOLOGIN', true);
    parent::__construct();
    $this->load->model('Empresa_model');
    $this->load->helper('empresa_helper');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array();
    $data['prov'] = $this->Empresa_model->getProvincia();
    $this->load->view('/principal/index');
  }

}
