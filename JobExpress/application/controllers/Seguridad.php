<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller{

  public function __construct()
  {
    define('NOLOGIN', true);
    parent::__construct();
    $this->load->model('Seguridad_model');

    //Codeigniter : Write Less Do More
  }

  function indexUsuario()
  {
    $this->load->view('seguridad/loginUsuario');

  }

  function indexEmpresa()
  {

    $this->load->view('seguridad/loginEmpresa');
  }

  function accederUsuario()
  {

    if($_POST){
      $tmp = $this->Seguridad_model->validarUsuario($_POST);

      if($tmp !==false)
      {
        $tmp2 = $this->Seguridad_model->getdata($tmp->IdUsuario);

        $_SESSION['Id'] = $tmp->IdUsuario;
        $_SESSION['usuario'] = $tmp->Email;
        $_SESSION['rol'] = $tmp->Rol;
        $_SESSION['foto'] = $tmp2->Foto;
        $this->load->view('principal/index');
      }

      else{

      $this->load->view('seguridad/loginUsuario');

      }

  }
}


function accederEmpresa()
{
  if($_POST)
  {

    $tmp=$this->Seguridad_model->validarEmpresa($_POST);

    if($tmp!==false)
    {
      $_SESSION['usuario'] = $tmp->Email;
      $_SESSION['rolEmpresa'] = $tmp->Rol;


      $this->load->view('principal/index');
    }
    else{

      redirect('seguridad/loginEmpresa');

    }

  }


}


function recuperarUsuario()
{
  if($_POST){

    $tmp = $this->Seguridad_model->getAcceso($_POST['Email']);

    if($tmp!==false){
    $mensaje = "Recuperar Usuario JobExpress " . "\r\n";
    $mensaje .= "Este correo ha sido enviado para recuperar los datos de usuario, " . "\r\n";
    $mensaje .= "Usuario: " . $tmp->Email . "\r\n";
    $mensaje .= "Contrasena: " . $tmp->Clave . "\r\n";
    $mensaje .= "En caso de no haber enviado una solicitud de recuperacion de usuario, Favor Obviar este mensaje " . "\r\n";

    $headers = "FROM : JobExpress" . "\r\n" . "";
    $email = $_POST['Email'];
    mail($email, 'Bienvenido', $mensaje, $headers);

    echo "Mensaje de Recuperacion de Usuario Enviado, Favor de revisar Su correo Electronico";
  }
  else{
    echo "El correo electronico subministrado no esta asociado a este sitio web";
  }
  }

}

  function logout()
  {
    $this->load->view('seguridad/logout');
  }

}


/*$mensaje = "Recuperar Usuario JobExpress " . "\r\n";
$mensaje .= "Este correo ha sido enviado para recuperar los datos de usuario, " . "\r\n";
$mensaje .= "Usuario: " . $tmp->Email . "\r\n";
$mensaje .= "Contrasena: " . $tmp->Clave . "\r\n";
$mensaje .= "En caso de no haber enviado una solicitud de recuperacion de usuario, Favor Obviar este mensaje " . "\r\n";

$headers = "FROM : JobExpress" . "\r\n" . "";
$email = $_POST['Email'];
mail($email, 'Bienvenido', $mensaje, $headers);*/
