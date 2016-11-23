<?php plantilla::start(); ?>

<div class="row well">

<form method="post" action="<?php echo base_url('/Usuario/actualizarDatos') ?>" enctype="multipart/form-data" >
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">Mi Informacion Personal</h2>
        <div class="col-md-6">

          <input type="hidden"  name="IdUsuario" value="<?php echo $user->IdUsuario; ?>" class="form-control"/>
          <br>

          <input type="text" required value="<?php echo $user->PrimerNombre; ?>" name="PrimerNombre" class="form-control"/>
          <br>

          <input type="text" required value="<?php echo $user->SegundoNombre; ?>" name="SegundoNombre" class="form-control"/>
          <br>

          <input type="text" required value="<?php echo $user->PrimerApellido; ?>" name="PrimerApellido" class="form-control"/>
          <br>

          <input type="text" required value="<?php echo $user->SegundoApellido; ?>" name="SegundoApellido" class="form-control"/>
          <br>

          <input type="number" required value="<?php echo $user->NoCedula; ?>" name="NoCedula" class="form-control"/>
          <br>

          <select class="form-control" name="IdSexo">
            <option >Seleccione Sexo </option>
            <option value="1" >Masculino</option>
            <option value="2" >Femenino</option>
          </select>

        </div>

<br>

        <div class="col-md-6">

          <input type="file"  name="Foto" class="form-control"/>
          <br>

          <input type="text" required value="<?php echo $user->Direccion; ?>" name="Direccion" class="form-control"/>

          <br>

          <select class="form-control" name="Provincia">
            <option value="1">Seleccione Provincia </option>

          </select>

          <br>
          <input type="date" value="<?php echo $user->FechaNacimiemto; ?>" name="FechaNacimiemto" class="form-control"/>

          <br>
          <input type="text" required value="<?php echo $user->NivelAcademico; ?>" name="NivelAcademico" class="form-control"/>

          <br>
          <input type="text" placeholder="¿Esta Laborando?" value="<?php echo $user->Laborando; ?>" name="Laborando" class="form-control"/>

          <br>
        </div>


    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="col-md-4"> </div>
           <div class="col-md-5"> <input type="submit" value="Guardar Cambios" style="position: relative;
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

   </div>

 </form>
</div>
<br>





</div>

</div>


</div>
</div>

</div>

</div>
<!-- /.container -->







<hr>

<!-- Footer -->
<hr>

<!-- Footer -->
<footer style=" 
   left:0px;
   bottom:0px;
   height:90px;
   width:100%;
   background:#14b1bb;">

       <div class="container" >
           <div class="row">
             <br>
                <div class="col-md-12" style="background:#585858; width:100%; height:50px;">

                  <div class="col-lg-12 text-center">
                    <br>
                       <p style='color:white;'>Copyright &copy;  2016</p>
                   </div>
                 </div>
           </div>
       </div>
   </footer>
