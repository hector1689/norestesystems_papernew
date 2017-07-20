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

<?php 


include("class/database.php");
$objData = new Database();



$sth3 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `cat_nacional`  ');

$sth3->execute();

$result3 = $sth3->fetchAll();

if($result3){
  foreach ($result3 as $key => $value) {
 }
$nacional_total=$value['cuenta'];                               
 }

 $sth4 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `cat_deportes`  ');

$sth4->execute();

$result4 = $sth4->fetchAll();

if($result4){
  foreach ($result4 as $key => $value) {
 }
$deportes_total=$value['cuenta'];                               
 }


$sth5 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `cat_politica`  ');

$sth5->execute();

$result5 = $sth5->fetchAll();

if($result5){
  foreach ($result5 as $key => $value) {
 }
$politica_total=$value['cuenta'];                               
 }

 $sth6 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `cat_seguridad`  ');

$sth6->execute();

$result6 = $sth6->fetchAll();

if($result6){
  foreach ($result6 as $key => $value) {
 }
$seguridad_total=$value['cuenta'];                               
 }

  $sth7 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `columnistas`  ');

$sth7->execute();

$result7 = $sth7->fetchAll();

if($result7){
  foreach ($result7 as $key => $value) {
 }
$columnistas_total=$value['cuenta'];                               
 }

   $sth8 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `nota_columnista`  ');

$sth8->execute();

$result8 = $sth8->fetchAll();

if($result8){
  foreach ($result8 as $key => $value) {
 }
$nota_columnistas_total=$value['cuenta'];                               
 }


$sth9 = $objData->prepare('SELECT COUNT(id) as cuenta FROM `video_semana`  ');

$sth9->execute();

$result9 = $sth9->fetchAll();

if($result9){
  foreach ($result9 as $key => $value) {
 }
$video_total=$value['cuenta'];                               
 }

 ?>

            <nav class="light-blue accent-4 z-depth-5">
              <div class="nav-wrapper">
            <a >&nbsp;&nbsp;&nbsp;<strong>Publicaciones Totales</strong></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><i class="Tiny material-icons">public</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $nacional_total;?></span></li>
                  <li><i class="Tiny material-icons">stars</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $deportes_total;?></span></li>
                  <li><i class="Tiny material-icons">work</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $politica_total;?></span></li>
                  <li><i class="Tiny material-icons">verified_user</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $seguridad_total;?></span></li>
                  <li><i class="Tiny material-icons">movie</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $columnistas_total;?></span></li>
                  <li><i class="Tiny material-icons">person</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $video_total;?></span></li>
                  <li><i class="Tiny material-icons">assignment</i></li>
                  <li><span class=" teal darken-2 badge" style="color:white;"><?php echo $nota_columnistas_total;?></span></li>
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