<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }


function guardarAplicacion($datos)
{
$this->db->insert('solicitudAnuncio', $datos);

}
  function getProvincia()
  {
    $query=$this->db->get('provincia');
    return $query->result();

  }

  function getUser($id)
  {
    $this->db->where('IdUsuario =', $id);
    $query = $this->db->get('usuario');

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


  function actualizar($usuario)
  {
    $id = $usuario->IdUsuario +0;

    $user = new stdClass();
    $user->PrimerNombre = $usuario->PrimerNombre;
    $user->SegundoNombre = $usuario->SegundoNombre;
    $user->PrimerApellido = $usuario->PrimerApellido;
    $user->SegundoApellido = $usuario->SegundoApellido;
    $user->NoCedula =  $usuario->NoCedula;
    $user->IdSexo = $usuario->IdSexo ;
    $user->Foto = $usuario->Foto;
    $user->Direccion = $usuario->Direccion;
    $user->Provincia = $usuario->Provincia;
    $user->FechaNacimiemto = $usuario->FechaNacimiemto;
    $user->NivelAcademico = $usuario->NivelAcademico;
    $user->Laborando = $usuario->Laborando;

    $this->db->where('IdUsuario =', $id);
    $this->db->update('Usuario', $user);


  }



}



   
