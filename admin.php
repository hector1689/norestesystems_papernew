<!DOCTYPE html>
  <html>
<?php include("include/head.php"); ?>

    <body>


          <div class="col s12 m3">

            <div class="navbar-fixed">
              
<?php include("include/nav_login.php"); ?>

            </div>
            
          </div> 


    <div class="row">

      <div class="col s2 m2">
<?php  include("include/izq_nav_login.php"); ?>

      </div>

      <div class="col s10">
        <div class="container">

          <div class="divider"></div>
          <div class="row">

           <blockquote>
             <h3>Administrador </h3>
            </blockquote>
            <div class="divider"></div>
            <div style="height: 40px;"></div>
            <div class="row">

              <div  class="card white z-depth-5">

                  <div class="card-content white-text">
                    <div class="row">
                    <div class="card-panel teal lighten-2">
                     <h6><i class="material-icons prefix">description</i> Publicaciones Totales #numero de publicaciones! </h6>
                    </div>

                    </div>

                     <div class="row">
                    <div class="card-panel teal lighten-2">
                     <h6><i class="material-icons prefix">description</i> Columnista con mayor publicacion #numero de publicaciones! </h6>
                    </div>

                    </div>

                    <div class="row">
                    <div class="card-panel teal lighten-2">
                     <h6><i class="material-icons prefix">description</i> Total de notas de Noticia #numero de publicaciones! </h6>
                    </div>

                    </div>

                    <div class="row">
                    <div class="card-panel teal lighten-2">
                     <h6><i class="material-icons prefix">description</i> Total de notas de Deportes publicacion #numero de publicaciones! </h6>
                    </div>

                    </div>

                    <div class="row">
                    <div class="card-panel teal lighten-2">
                     <h6><i class="material-icons prefix">description</i> Total de notas de Politica #numero de publicaciones! </h6>
                    </div>

                    </div>

                    <div class="row">
                    <div class="card-panel teal lighten-2">
                     <h6><i class="material-icons prefix">description</i> Total de notas de Seguridad #numero de publicaciones! </h6>
                    </div>

                    </div>

                    
                  </div>

                </div>

                <div style="height: 40px;"></div>

          <?php include("administrador/admin_alta.php"); ?>
                         
            </div>

        </div>

        </div>
      </div>

    </div>   


<script>
$(document).ready(function(){ 

   $('#alternar-respuesta-2').on('click',function(){
      $('.respuesta-2').toggle('slow');
   });

      $('#alternar-respuesta-3').on('click',function(){
      $('.respuesta-3').toggle('slow');
   });

         $('#alternar-respuesta-4').on('click',function(){
      $('.respuesta-4').toggle('slow');
   });

            $('#alternar-respuesta-5').on('click',function(){
      $('.respuesta-5').toggle('slow');
   });

  $('select').material_select();

});
</script>  




      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    </body>
  </html>