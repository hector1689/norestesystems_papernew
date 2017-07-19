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



<nav class="light-blue accent-4 z-depth-5">
  <div class="nav-wrapper">
<a ><strong>Publicaciones Totales</strong></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><i class="Tiny material-icons">public</i></li>
      <li><span class="new badge">4</span></li>
      <li><i class="Tiny material-icons">stars</i></li>
      <li><span class="new badge">4</span></li>
      <li><i class="Tiny material-icons">work</i></li>
      <li><span class="new badge">4</span></li>
      <li><i class="Tiny material-icons">verified_user</i></li>
      <li><span class="new badge">4</span></li>
      <li><i class="Tiny material-icons">group</i></li>
      <li><span class="new badge">4</span></li>
      <li><i class="Tiny material-icons">person</i></li>
      <li><span class="new badge">4</span></li>
      <li><i class="Tiny material-icons">assignment</i></li>
      <li><span class="new badge">4</span></li>
    </ul>
  </div>
</nav>



             

                <div style="height: 40px;"></div>

                <div id="div-results"></div>

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


         $('#alternar-respuesta-6').on('click',function(){
      $('.respuesta-6').toggle('slow');
   });

         $('#alternar-respuesta-7').on('click',function(){
      $('.respuesta-7').toggle('slow');
   });

         $('#alternar-respuesta-8').on('click',function(){
      $('.respuesta-8').toggle('slow');
   });

  $('select').material_select();

});
</script>  


 <footer style="background-color: black;" class="page-footer">
    <div class="footer-copyright">
            <div class="container">
            © 2017 Noreste Systems
            </div>
          </div>
  </footer>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


    </body>
  </html>