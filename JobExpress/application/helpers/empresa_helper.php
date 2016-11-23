<?php



if(!isset($_SESSION['rol']=='2') && !defined('NOLOGIN'))
{
  redirect('Seguridad/indexEmpresa');

}


foreach($anuncio as $fila)
     {
       echo "<div class='row'>
           <table class='table table-bordered'>
             <tbody>
               <td>
               <div class=' container well col-md-12'>

                 <div class ='col-md-4'> <h3 class = 'text-primary'><strong>{$fila->Nombre}</strong></h3>
                               <br>
                                         <h4 class= 'text-primary text-center'>Requisitos</h4>
                                           <p class='text-center'>-{$fila->Requisitos}</p>
                                           <br>

                                           <h4 class= 'text-primary text-center'> Nivel Academico Requerido</h4>
                                           <br>
                                           <ul> <li>{$fila->NivelAcademico}</li></ul>

                  </div>


                 <div class ='col-md-4'>

                    <h4 class= 'text-primary text-center'>Descripcion del empleo</h4>
                    <p class='text-center'> {$fila->Descripcion}</p>

                    <br>

                    <h4 class= 'text-primary text-center'>Horario</h4>
                    <p class='text-center'> {$fila->Horario}</p>

                    <h4 class= 'text-primary text-center'>Salario</h4>
                    <p class='text-center'> {$fila->Salario}</p>

                    <br>

                 </div>



                 <div class ='col-md-4'>

                 <h4 class= 'text-primary text-center'>Fecha de Publicacion</h4>
                    <p class='text-center'> {$fila->Fecha}</p>

                    <br>

                   <div class='col-md-6'>
<form method='POST' action='. .'>
  <input type='hidden' value='". {$_SESSION['IdUsuario']} ."' name='IdUsuario'/>
  <input type='hidden' value='". {$fila->IdAnuncio} ."' name='IdUsuario'/>

                    <button class='btn btn-flat btn-success' type='submit' id='aplicar'>Aplicar </button>
                    </form>
                    </div>;


                 </div>




                 <div>
               </td>
             </tbody>
            </table>

       </div>";
