<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job Express</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="plantilla/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plantilla/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plantilla/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <h2><b>Job Express</b></h2>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesion</p>

    <form action="<?php echo base_url('/Seguridad/accederUsuario'); ?>" method="POST">
      <div class="form-group has-feedback">
        <input type="email" required class="form-control" name="Email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" required class="form-control" name="Clave" placeholder="Clave">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordar
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Acceder</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->

    <a href="#" data-toggle="modal" data-target="#modalClave">Olvide Mi Contrasena</a><br>





  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="row">

<div class="col-md-12">

  <div class="col-md-5"> </div>
  <div class="col-md-4"> <a href="<?php echo base_url('/Principal/index'); ?>" ><button class="btn btn-primary btn-flat">Volver a pagina Principal</button></a></div>
  <div class="col-md-3"> </div>
</div>

</div>


<div id="modalClave" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Recuperar Usuario</h4>
      </div>
      <div class="modal-body">
        <form method="post">

          <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"> </div>
                <div class="col-md-6">

                    <div class="row">
                      <div class="form-group has-feedback">
                        <input type="email" required class="form-control" id="EmailRecuperar" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                 </div>
                <div class="col-md-1"> </div>


                <div class="row">
                <div class="col-xs-8">
                  <button type="button"  id="enviar" class="btn btn-success btn-block btn-flat">Enviar Datos</button>
                </div>
              </div>
              </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<!-- jQuery 2.2.3 -->
<script src="plantilla/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="plantilla/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plantilla/plugins/iCheck/icheck.min.js"></script>
<script>



  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });


$(document).ready(function(){

  $("#enviar").click(function(){

    x = document.getElementById('EmailRecuperar').value;
    $.ajax({
      type:"POST",
      url: "<?php echo base_url('/Seguridad/recuperarUsuario'); ?>",
      data: {'Email': x},
      success: function(data)
      {
        alert(data);
        $("#modalClave").modal('hide');
      }
    });
return false;
  });


});

</script>
</body>
</html>
