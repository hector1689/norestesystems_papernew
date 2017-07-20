 <?php 
include("../class/database.php");
$objData = new Database();



$sth3 = $objData->prepare('SELECT * FROM cat_nacional ');

$sth3->execute();

$result3 = $sth3->fetchAll();


?>

<style>
  #scroll {

     height:420px;
     
     overflow:auto;
}
</style>
<script >
  function objetoAjax(){
  var xmlhttp=false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
       xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
      }
  }

  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}

function eliminarNota(id){


    ajax=objetoAjax();

    ajax.open("GET", "administrador/php/eliminar_noticia.php?id="+id);
    ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {
      swal({
        title: "Felicidades!",
        text: "Se ha Eliminado el Registro del Médico.",
        type: "error"
    });location.reload(900);
      }
    }

    ajax.send(null)

}
</script>
                <blockquote>
                   <h3><i class="material-icons">view_headline</i> Noticias</h3>                   
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
                            <th>Titulo</th>
                            <th>Nota Previa</th>
                            <th>Fecha</th>

                            <th></th>
                          </tr>
                          </thead>
                            <tbody class="buscar_medicos" >
                              <?php
                              if($result3){
                                  foreach ($result3 as $key => $value) {
                              ?>
                              <tr>
                              
                                <td ><?php echo $value['titulo_nacional'];?></td>
                                <td ><?php echo $value['previo_titulo_nacional'];?></td>
                                <td ><?php echo $value['date_nacional'];?></td>

                                   <td id="td">
                                    <a href="administrador/editar_noticia.php?id=<?php echo $value['id']; ?>" class="waves-effect waves-light  yellow darken-4 btn"><i class="Tiny material-icons">mode_edit</i></a>
                                    
                                    </td>
                                    <td>
                                      <small><a onclick="eliminarNota('<?php echo $value['id']; ?>')" class="waves-effect waves-light red btn"><i class="Tiny material-icons">delete</i></a></small>
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
                 $("#div-results3").load(href);
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
