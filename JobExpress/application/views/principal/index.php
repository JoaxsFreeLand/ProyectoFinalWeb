<?php plantilla::start(); ?>


<script>

  $(document).ready(function(){

    $("#sexo").change(function(){
      x = "tony"
      $.ajax({
        type:"POST",
        url: "<?php echo base_url('/Principal/prueba'); ?>",
        data:x,
        success: function(result){
        $("#val").val(result);
        }
      });
    })

  });

</script>


<h2 class="text-center">Empleos Publicados </h2>

<select id="sexo">
<option value="1">Hombre</option>
<option value="2">Mujer </option>

</select>
<br>

<input type="text" id="val" class="form-control"/>

<div class="container well col-md-12">

<div class="row">




</div>

</div>



  </div>
</div>

</div>

</div>
<!-- /.container -->







<hr>

<!-- Footer -->
<footer style=" border-radius: 25px;
    background: #73AD21;
    padding: 20px;

   left:0px;
   bottom:0px;
   height:250px;
   width:100%;
   background:#14b1bb;">

       <div class="container" >
           <div class="row">

                <div class="col-md-12" style="background:#585858; width:1170px; height:205px; padding: 20px;
                  border-radius: 25px;">

                  <div class="col-lg-12 text-center">

                       <p style='color:white;'>Copyright &copy;  2016</p>
                   </div>
                 </div>
           </div>
       </div>
   </footer>

  <!-- -->
