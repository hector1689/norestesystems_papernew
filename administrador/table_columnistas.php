 <?php 
include("../class/database.php");
$objData = new Database();



$sth3 = $objData->prepare('SELECT * FROM columnistas ');

$sth3->execute();

$result3 = $sth3->fetchAll();


?>

<style>
  #scroll {

     height:420px;
     
     overflow:auto;
}
</style>

                <blockquote>
                   <h3><i class="material-icons">view_headline</i> Columnistas</h3>                   
                  </blockquote>
               <div  class="card white z-depth-5">


                  <div class="card-content black-text" id="scroll">
                  
                 
                    <div class="input-field col s12">
                      <input id="filtrar" type="search" required>
                      <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                      <table class="highlight centered responsive-table" >
                          <thead>
                          <tr>
                            <th>Nombre del Columnista</th>
                            <th>Apellidos del Columnista</th>
                            

                            <th></th>
                          </tr>
                          </thead>
                            <tbody class="buscar_medicos" >
                              <?php
                              if($result3){
                                  foreach ($result3 as $key => $value) {
                              ?>
                              <tr>
                              
                                <td ><?php echo $value['nombre_columnista'];?></td>
                                <td ><?php echo $value['apellido_columnista'];?></td>

                                   <td>
                                    <a class="waves-effect waves-light  yellow darken-4 btn"><i class="Tiny material-icons">mode_edit</i></a>
                                    <a class="waves-effect waves-light red btn"><i class="Tiny material-icons">delete</i></a>
                                    </td>

                              </tr>
                                  <?php
                                      
                                  }
                                  
                                  }?>

                            </tbody>
                      </table>

                  </div>

                </div>



<script>
      $(document).ready(function() {
$("#td a").each(function(){
              var href = $(this).attr("href");
              $(this).attr({ href: "#"});
              $(this).click(function(){
                 $("#div-results").load(href);
              });
           });


(function ($) {

      $('#filtrar').keyup(function () {

          var rex = new RegExp($(this).val(), 'i');
          $('.buscar_medicos tr').hide();
          $('.buscar_medicos tr').filter(function () {
              return rex.test($(this).text());
          }).show();

      })

  }(jQuery));
 });
</script>
