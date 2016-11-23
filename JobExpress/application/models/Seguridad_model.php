<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function validarUsuario($Usu)
  {
    $this->db->where('Email =', $Usu['Email']);
    $this->db->where('Clave =', $Usu['Clave']);
    $query = $this->db->get('acceso');


    $rs = $query->result();

    if(count($rs)>0)
    {
      $usuario = $rs[0];
      return $usuario;
    }

    else
    {
      return false;
    }

  }

  function validarEmpresa($empresa)
  {
    $this->db->where('Email =', $empresa['Email']);
   $this->db->where('Clave =', $empresa['Clave']);
    $query = $this->db->get('accesoempresa');
    $rs = $query->result();

    if(count($rs)>0)
    {
      $empre = $rs[0];
      return $empre;
    }

    else{
      return false;
    }

  }

function getdata($id)
{

  $this->db->where('IdUsuario =',$id);
  $query = $this->db->get('usuario');

  $rs = $query->result();

  if(count($rs)>0)
  {
    $data = $rs[0];
    return $data;
  }

}

function getAcceso($email)
{
  $this->db->where('Email =', $email);
  $query = $this->db->get('acceso');

  $rs = $query->result();

  if(count($rs)>0)
  {
    $datos = $rs[0];
    return $datos;
  }
  else
  {
    return false;
  }

}

}
