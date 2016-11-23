<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function getAnuncios()
  {
    $query =$this->db->get('anuncio');
    return $query->result();

  }

  function getProvincias()
  {
    $query = $this->db->get('Provincia');

    return $query->result();

  }

  function guardarUsuario($usuario, $data)
  {

    $this->db->insert('usuario', $usuario);
    $id = $this->db->insert_id();
    $acceso = array();

    $acceso['Email'] = $data['Email'];
    $acceso['Clave'] = $data['Clave'];
    $acceso['Rol'] = 1;
    $acceso['IdUsuario'] = $id;


    $this->db->insert('Acceso', $acceso);



  }

  function guardarEmpresa($data)
  {
    $acceso = array();
    $acceso['Email'] = $data['Email'];
    $acceso['Clave'] = $data['Clave'];
    $acceso['Rol'] = 2;

    unset($data['Email']);
    unset($data['Clave']);

    $this->db->insert('empresa', $data);

    $id = $this->db->insert_id();

    $acceso['IdEmpresa'] = $id;

    $this->db->insert('accesoEmpresa', $acceso);

  }

}
