<!DOCTYPE html>
  <html>
<?php include("include/head.php"); ?>

    <body>


          <div class="col s12 m3">

            <div class="navbar-fixed">
              
<?php include("include/nav.php"); ?>
            </div>
            
          </div> 


    <div class="row">

      <div class="col s2 m2">
<?php include("include/izq_nav.php"); ?>
      </div>

      <div class="col s10">
        <div class="container">

          <div class="divider"></div>

          <div class="row">

           <blockquote>
             <h3>Notas Principales </h3>
            </blockquote>
            <div class="row">

              <?php include("include/notas_rapidas.php"); ?>
            </div>
            
            <div class="divider"></div>

            <blockquote>
             <h3>Secciones </h3>
            </blockquote>

            <?php include("include/secciones.php"); ?>

        </div>

        </div>
      </div>

    </div>   



  <footer style="background-color: black;" class="page-footer">
    <?php include("include/footer.php"); ?>
  </footer>

    </body>
  </html>