<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    define('NOLOGIN', true);
    parent::__construct();
    $this->load->model('Usuario_model');
    $this->load->helper('usuario_helper');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array();
    $data['Provincia'] = $this->Usuario_model->getProvincia();
    
    $this->load->view('/principal/index', $data);

  }


  function aplicarEmpleo()
  {

    if($_POST)
    {
      $this->Usuario_model->guardarAplicacion($_POST);

      redirect('usuario/index');

    }


  }




  function informacion()
  {
    $data = array();
    $data['user'] = $this->Usuario_model->getUser($_SESSION['Id']);
    $this->load->view('/usuario/info', $data);

  }


  function actualizarDatos()
  {
    $usuario = new stdClass();
    if($_POST)
    {
    /*  $mensaje = "Bienvenido a Job Express " . "\r\n";
      $mensaje .= " Te damos la bienvenida a nuestra gran pagina de empleos " . $_POST['PrimerNombre'] . "\r\n";
      $mensaje .= " Donde encontrar empleo es mas facil y sencillo" . "\r\n";

      $headers = "FROM : {$_POST['Email']}" . "\r\n" . "";
      $email = $_POST['Email'];
      mail($email, 'Bienvenido', $mensaje, $headers);*/
      $usuario->IdUsuario=$_POST['IdUsuario'];
      $usuario->PrimerNombre=$_POST['PrimerNombre'];
      $usuario->SegundoNombre=$_POST['SegundoNombre'];
      $usuario->PrimerApellido=$_POST['PrimerNombre'];
      $usuario->SegundoApellido=$_POST['SegundoApellido'];
      $usuario->SegundoApellido=$_POST['SegundoApellido'];
      $usuario->NoCedula=$_POST['NoCedula'];
      $usuario->IdSexo = $_POST['IdSexo'];

      $image = $_FILES['Foto']['name'];
      $route = $_FILES['Foto']['tmp_name'];
      $destination = "imagenes/".$image;

      copy($route, $destination);

      $usuario->Foto = $destination;
      $usuario->Direccion=$_POST['Direccion'];
      $usuario->Provincia = $_POST['Provincia'];
      $usuario->FechaNacimiemto = $_POST['FechaNacimiemto'];
      $usuario->NivelAcademico = $_POST['NivelAcademico'];
      $usuario->Laborando = $_POST['Laborando'];


      $this->Usuario_model->actualizar($usuario);

      $this->index();


  }



}
}
