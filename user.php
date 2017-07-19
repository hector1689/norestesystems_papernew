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
<!--<?php // include("include/izq_nav.php"); ?>-->
      </div>

      <div class="col s10">
        <div class="container">

          <div class="divider"></div>

          <div class="row">

           <blockquote>
             <h3>Ajustes </h3>
            </blockquote>
            <div class="row">
              
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                      <label for="disabled">Disabled</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      This is an inline input field:
                      <div class="input-field inline">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
                         
            </div>

        </div>

        </div>
      </div>

    </div>   



  <footer style="background-color: black;" class="page-footer">
    <?php include("include/footer.php"); ?>
  </footer>

    </body>
  </html>