<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Inicio_model');

    //Codeigniter : Write Less Do More
  }

  function prueba()
  {
    if($_POST['x']=='tony')
    {

      echo "llego";

    }


  }

  function index()
  {
   $data = array();

    $data['Provincia'] = $this->Inicio_model->getProvincias();

    $this->load->view('principal/index', $data);
  }



  function registroUsuario()
  {

    $usuario = new stdClass();
    if($_POST)
    {
      $mensaje = "Bienvenido a Job Express " . "\r\n";
      $mensaje .= " Te damos la bienvenida a nuestra gran pagina de empleos " . $_POST['PrimerNombre'] . "\r\n";
      $mensaje .= " Donde encontrar empleo es mas facil y sencillo" . "\r\n";

      $headers = "FROM : {$_POST['Email']}" . "\r\n" . "";
      $email = $_POST['Email'];
      mail($email, 'Bienvenido', $mensaje, $headers);
      $usuario->PrimerNombre=$_POST['PrimerNombre'];
      $usuario->SegundoNombre=$_POST['SegundoNombre'];
      $usuario->PrimerApellido=$_POST['PrimerApellido'];
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


      $this->Inicio_model->guardarUsuario($usuario, $_POST);

      $this->load->view('/seguridad/loginUsuario');

    }

  }

  function registroEmpresa()
  {
    if($_POST)
    {

    /*  $mensaje = "Bienvenido a Job Express " . "\r\n";
      $mensaje .= " Te damos la bienvenida a nuestra gran pagina de empleos " . $_POST['Nombre'] . "\r\n";
      $mensaje .= " Donde encontrar empleo es mas facil y sencillo" . "\r\n";

      $headers = "FROM : {$_POST['Email']}" . "\r\n" . "";
      $email = $_POST['Email'];
      mail($email, 'Bienvenido', $mensaje, $headers);
*/
      $this->Inicio_model->guardarEmpresa($_POST);

      $this->load->view('/seguridad/loginEmpresa');

    }


  }




}
