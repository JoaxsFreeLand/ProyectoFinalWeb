<?php
session_start();
class plantilla{

  static $instancia = null;

  static function start()
  {
    self::$instancia=new plantilla();

  }


  function __construct()
  {
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Express</title>

    <!-- Bootstrap Core CSS -->
    <link href="plantilla/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="plantilla/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}

.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

</style>

<script>

$(document).ready(function(){
$("#pasarUsuario").click(function(){

$("#myEegistro").modal('hide');
});

});


$(document).ready(function(){
$("#pasarEmpresa").click(function(){

$("#myEegistro").modal('hide');
});

});


 </script>

</head>

<body >

    <!-- Navigation -->
    <nav class="navbar navbar-light  navbar-fixed-top"  style="background-color: #14b1bb;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style='color:white;'>Job Express</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <?php

                    if(!isset($_SESSION['rol']))
                    {
                      $linkIniciar =  base_url('/Seguridad/index');
                      /*$linkCerrarSesion = base_url('Seguridad/logout');*/

                      echo "<li>
                          <a href='" . $linkIniciar ."' data-toggle='modal' data-target='#ModalLogin' style='color:white;'>Iniciar Sesion</a>
                      </li>
                      <li>
                          <a href='#' data-toggle='modal' data-target='#myEegistro' style='color:white';>Registarse</a>
                      </li>
                    ";
                  }


?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



      </div>
    </div>




    <!--modal de inicio de registroempresa-->
        <div id="modalEmpresaReg" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registro Empresarial</h4>
              </div>
              <div class="modal-body">

                <form method="post" action="<?php echo base_url('/Principal/registroEmpresa') ?>" >
                  <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                          <input type="text" required placeholder="Nombre" name="Nombre" class="form-control"/>
                          <br>

                          <input type="number" required placeholder="Rnc" name="Rnc" class="form-control"/>
                          <br>

                          <input type="text" required placeholder="Direccion" name="Direccion" class="form-control"/>
                          <br>

                        <select name="Provincia" class="form-control">
                            <option>Seleccione Provincia </option>
                            <option value="1">Azua</option>
                         </select>
                          <br>

                          <input type="text" required placeholder="¿A que se dedica?" name="Dedicacion" class="form-control"/>
                          <br>


                        </div>



                        <div class="col-md-6">

                          <input type="text"  name="PaginaWeb" placeholder="Nombre de su pagina Web" class="form-control"/>
                          <br>

                          <input type="file"  name="Logo" class="form-control"/>

                          <br>

                          <input type="text"  name="PersonaContacto" placeholder="Nombre de Persona de Contacto" class="form-control"/>


                          <br>
                          <input type="number"  name="TelefonoContacto" placeholder="TelefonoContacto" class="form-control"/>


                        </div>


                    </div>


                   </div>
    <br>

    <div class="row">
    <div class="col-md-12 alert alert-info text-center"> <span>Datos de Acceso </span></div>
      <div class="col-md-12 conteiner well">

          <div class="col-md-6"><input required type="email" placeholder="Email" name="Email" class="form-control"/></div>
          <div class="col-md-6"><input required type="password" placeholder="Clave" name="Clave" class="form-control"/></div>

       </div>

    </div>
    <br>
                   <div class="row">
                     <div class="col-md-12">

                       <div class="col-md-4"> </div>
                          <div class="col-md-5"> <input type="submit" value="Enviar" style="position: relative;
    vertical-align: top;
    width: 90%;
    height: 40px;
    padding: 0;
    font-size: 22px;
    color: white;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
    background: #1abc9c;
    border: 0;
    border-bottom: 2px solid #12ab8d;
    cursor: pointer;
    -webkit-box-shadow: inset 0 -2px #12ab8d;
    box-shadow: inset 0 -2px #12ab8d;"/> </div>
                             <div class="col-md-3"> </div>

                   </div>
                   </div>


                </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>


<!--modal de inicio de registrousuario-->
    <div id="modalUserReg" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registro de usuario</h4>
          </div>
          <div class="modal-body">

            <form method="post" action="<?php echo base_url('/Principal/registroUsuario') ?>" enctype="multipart/form-data" >
              <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                      <input type="text" required placeholder="Primer Nombre" name="PrimerNombre" class="form-control"/>
                      <br>

                      <input type="text" required placeholder="Segundo Nombre" name="SegundoNombre" class="form-control"/>
                      <br>

                      <input type="text" required placeholder="Primer Apellido" name="PrimerApellido" class="form-control"/>
                      <br>

                      <input type="text" required placeholder="Segundo Apellido" name="SegundoApellido" class="form-control"/>
                      <br>

                      <input type="number" required placeholder="Numero de Cedula" name="NoCedula" class="form-control"/>
                      <br>

                      <select class="form-control" name="IdSexo">
                        <option >Seleccione Sexo </option>
                        <option value="1" >Masculino</option>
                        <option value="2" >Femenino</option>
                      </select>

                    </div>



                    <div class="col-md-6">

                      <input type="file"  name="Foto" class="form-control"/>
                      <br>

                      <input type="text" required placeholder="Direccion" name="Direccion" class="form-control"/>

                      <br>

                      <select class="form-control" name="Provincia">
                        <option value="1">Seleccione Provincia </option>

                      </select>

                      <br>
                      <input type="date"  name="FechaNacimiemto" class="form-control"/>

                      <br>
                      <input type="text" required placeholder="Nivel Academico" name="NivelAcademico" class="form-control"/>

                      <br>
                      <input type="text" placeholder="¿Esta Laborando?" name="Laborando" class="form-control"/>


                    </div>


                </div>


               </div>
<br>

<div class="row">
<div class="col-md-12 alert alert-info text-center"> <span>Datos de Acceso </span></div>
  <div class="col-md-12 conteiner well">

      <div class="col-md-6"><input required type="email" placeholder="Email" name="Email" class="form-control"/></div>
      <div class="col-md-6"><input required type="password" placeholder="Clave" name="Clave" class="form-control"/></div>

   </div>

</div>
<br>
               <div class="row">
                 <div class="col-md-12">

                   <div class="col-md-4"> </div>
                      <div class="col-md-5"> <input type="submit" value="Enviar" style="position: relative;
vertical-align: top;
width: 90%;
height: 40px;
padding: 0;
font-size: 22px;
color: white;
text-align: center;
text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
background: #1abc9c;
border: 0;
border-bottom: 2px solid #12ab8d;
cursor: pointer;
-webkit-box-shadow: inset 0 -2px #12ab8d;
box-shadow: inset 0 -2px #12ab8d;"/> </div>
                         <div class="col-md-3"> </div>

               </div>
               </div>


            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>


<!--modal de inicio de sesion-->
    <div id="ModalLogin" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Iniciar Sesion </h4>
          </div>
          <div class="modal-body">
            <div class="row">

                <div class="col-md-12">

                    <div class="col-md-6">
                        <a href="<?php echo base_url('/Seguridad/indexUsuario'); ?>">
                          <button  style="position: relative;
  vertical-align: top;
  width: 90%;
  height: 40px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #1abc9c;
  border: 0;
  border-bottom: 2px solid #12ab8d;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #12ab8d;
  box-shadow: inset 0 -2px #12ab8d;">Usuario </button> </a>
                    </div>

                      <div class="col-md-6">
                            <a href="<?php echo base_url('/Seguridad/indexEmpresa'); ?>">
                               <button style="position: relative;
  vertical-align: top;
  width: 90%;
  height: 40px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #2ecc71;
  border: 0;
  border-bottom: 2px solid #28be68;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #28be68;
  box-shadow: inset 0 -2px #28be68;" >Empresa </button> </a>
                      </div>


                </div>

             </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>








<!--Modal re registro-->
    <div id="myEegistro" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">¿Como desea registrarse?</h4>
          </div>
          <div class="modal-body">
            <div class="row">

                <div class="col-md-12">

                    <div class="col-md-6">
                        <a href="#">
                          <button data-toggle="modal" id="pasarUsuario" data-target="#modalUserReg" style="position: relative;
  vertical-align: top;
  width: 90%;
  height: 40px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #1abc9c;
  border: 0;
  border-bottom: 2px solid #12ab8d;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #12ab8d;
  box-shadow: inset 0 -2px #12ab8d;">Usuario </button> </a>
                    </div>

                      <div class="col-md-6">
                            <a href="#">
                               <button data-toggle="modal" id="pasarEmpresa"  data-target="#modalEmpresaReg" style="position: relative;
  vertical-align: top;
  width: 90%;
  height: 40px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #2ecc71;
  border: 0;
  border-bottom: 2px solid #28be68;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #28be68;
  box-shadow: inset 0 -2px #28be68;" >Empresa </button> </a>
                      </div>


                </div>

             </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>






    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-4">

<?php

if(isset($_SESSION['rol']))
  {
    $linkUsuarioInfo = base_url('/Usuario/informacion');
    $linkPrincipal = base_url('/Usuario/index');
    $linkCerrarSesion = base_url('/Seguridad/logout');
            echo "
            <div class='container'>
                  <div class='row profile'>
              		<div class='col-md-3'>
              			<div class='profile-sidebar'>
              				<!-- SIDEBAR USERPIC -->
              				<div class='profile-userpic'>
              					<img src='{$_SESSION['foto']}' class='img-responsive' alt='Foto de Perfil'>
              				</div>
              				<!-- END SIDEBAR USERPIC -->
              				<!-- SIDEBAR USER TITLE -->
              				<div class='profile-usertitle'>
              					<div class='profile-usertitle-name'>
              						{$_SESSION['usuario']}
              					</div>
              					<div class='profile-usertitle-job'>
              						Usuario
              					</div>
              				</div>
              				<!-- END SIDEBAR USER TITLE -->
              				<!-- SIDEBAR BUTTONS -->

              				<!-- END SIDEBAR BUTTONS -->
              				<!-- SIDEBAR MENU -->
              				<div class='profile-usermenu'>
              					<ul class='nav'>
              						<li class='active'>
              							<a href='" . $linkPrincipal ."'>
              							<i class='glyphicon glyphicon-home'></i>
              							Pagina Principal </a>
              						</li>
              						<li>
              							<a href='". $linkUsuarioInfo . "' >
              							<i class='glyphicon glyphicon-user'></i>
              							Mi Cuenta </a>
              						</li>
              						<li>
              							<a href='#' target='_blank'>
              							<i class='glyphicon glyphicon-ok'></i>
              							Tasks </a>
              						</li>
              						<li>
              							<a href='". $linkCerrarSesion ."'>
              							<i class='glyphicon glyphicon-log-in'></i>
              							Cerrar Sesion </a>
              						</li>
              					</ul>
              				</div>
              				<!-- END MENU -->
              			</div>
              		</div>

              	</div>
              </div>

              <br>
              <br> ";
            }
            else if(isset($_SESSION['rolEmpresa'])){

              $linkEmpresaInfo = base_url('/Empresa/informacion');
              $linkPrincipal = base_url('/Empresa/index');
              $linkCerrarSesion = base_url('/Seguridad/logout');
                      echo "
                      <div class='container'>
                            <div class='row profile'>
                        		<div class='col-md-3'>
                        			<div class='profile-sidebar'>
                        				<!-- SIDEBAR USERPIC -->
                        				<div class='profile-userpic'>
                        					<img src='' class='img-responsive' alt='Foto de Perfil'>
                        				</div>
                        				<!-- END SIDEBAR USERPIC -->
                        				<!-- SIDEBAR USER TITLE -->
                        				<div class='profile-usertitle'>
                        					<div class='profile-usertitle-name'>
                        						{$_SESSION['usuario']}
                        					</div>
                        					<div class='profile-usertitle-job'>
                        						Usuario
                        					</div>
                        				</div>
                        				<!-- END SIDEBAR USER TITLE -->
                        				<!-- SIDEBAR BUTTONS -->

                        				<!-- END SIDEBAR BUTTONS -->
                        				<!-- SIDEBAR MENU -->
                        				<div class='profile-usermenu'>
                        					<ul class='nav'>
                        						<li class='active'>
                        							<a href='" . $linkPrincipal ."'>
                        							<i class='glyphicon glyphicon-home'></i>
                        							Pagina Principal </a>
                        						</li>
                        						<li>
                        							<a href='". $linkEmpresaInfo . "' >
                        							<i class='glyphicon glyphicon-user'></i>
                        							Mi Cuenta </a>
                        						</li>
                        						<li>
                        							<a href='#' data-toggle='modal' data-target='#modalAnuncio'>
                        							<i class='glyphicon glyphicon-ok'></i>
                        							Publicar Anuncio </a>
                        						</li>
                        						<li>
                        							<a href='". $linkCerrarSesion ."'>
                        							<i class='glyphicon glyphicon-log-in'></i>
                        							Cerrar Sesion </a>
                        						</li>
                        					</ul>
                        				</div>
                        				<!-- END MENU -->
                        			</div>
                        		</div>

                        	</div>
                        </div>

                        <br>
                        <br> ";


            }
?>

<div id="modalAnuncio" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

            </div>

            <div class="col-md-8">

<br>


                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">


<?php
}


function __destruct()
{

 ?>


 <script src="plantilla/js/jquery.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="plantilla/js/bootstrap.min.js"></script>

</body>

</html>



<?php

  }


}
