<script >
  $(document).ready(function(){


//////////////////////////////////////
$(".enviar_noticia").click(function(){
$("#noticia_nacional").show();


a=$(".nombre_nota_n").val();
b=$(".previa_nota_n").val();
c=$(".nota_nota_n").val();
d=$("#imagen_nota_n").val();
e=$("#principal_nota_n").val();
f=$(".date_nota_n").val();
$.ajax({
  url:"administrador/php/alta_noticias.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    previa:b,
    nota:c,
    imagen:d,
    principal:e,
    date:f
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#noticia_nacional").html(result);
}});
});

/////////////////////////////////////////////////////
$(".enviar_deportes").click(function(){
$("#noticia_deportes").show();


a=$(".nombre_nota_d").val();
b=$(".previa_nota_d").val();
c=$(".nota_nota_d").val();
d=$(".imagen_nota_d").val();
e=$("#principal_nota_d").val();
f=$(".date_nota_d").val();
$.ajax({
  url:"administrador/php/alta_deportes.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    previa:b,
    nota:c,
    imagen:d,
    principal:e,
    date:f
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#noticia_deportes").html(result);
}});
});
//////////////////////////////////////////////////////////////////////
$(".enviar_politica").click(function(){
$("#noticia_politica").show();


a=$(".nombre_nota_p").val();
b=$(".previa_nota_p").val();
c=$(".nota_nota_p").val();
d=$(".imagen_nota_p").val();
e=$("#principal_nota_p").val();
f=$(".date_nota_p").val();
$.ajax({
  url:"administrador/php/alta_politica.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    previa:b,
    nota:c,
    imagen:d,
    principal:e,
    date:f
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#noticia_politica").html(result);
}});
});


//////////////////////////////////////////////////

$(".enviar_seguridad").click(function(){
$("#noticia_seguridad").show();


a=$(".nombre_nota_s").val();
b=$(".previa_nota_s").val();
c=$(".nota_nota_s").val();
d=$(".imagen_nota_s").val();
e=$("#principal_nota_s").val();
f=$(".date_nota_s").val();
$.ajax({
  url:"administrador/php/alta_seguridad.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    previa:b,
    nota:c,
    imagen:d,
    principal:e,
    date:f
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#noticia_seguridad").html(result);
}});
});

///////////////////////////////////////////////
$(".enviar_columnista").click(function(){
$("#columnista_add").show();


a=$("#add_nombre").val();
b=$("#add_apellido").val();
c=$("#add_img").val();

$.ajax({
  url:"administrador/php/alta_columnista.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    apellido:b,
    imagen:c
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#columnista_add").html(result);
}});
});


//////////////////////////////////////////////////

$(".enviar_columna").click(function(){
$("#add_columna").show();


a=$("#nombre_columnista_colum").val();
b=$("#titulo_columnista").val();
c=$("#nota_columnista").val();
d=$("#date_nota").val();

$.ajax({
  url:"administrador/php/alta_columna.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    titulo:b,
    nota:c,
    date:d
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#add_columna").html(result);
}});
});

//////////////////////////////////////////

$(".enviar_usuario").click(function(){
$("#add_usuario").show();


a=$("#nombre_usuario").val();
b=$("#password_usuario").val();
c=$("#tipo_usuario").val();

$.ajax({
  url:"administrador/php/alta_usuario.php",
  cache:false,
  type:"POST",
  data:{
    
    nombre:a,
    password:b,
    tipo:c
},
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#add_usuario").html(result);
}});
});

});
</script>             
              <div class="col s12 ">

                <div class="fixed-action-btn  click-to-toggle ">
                  <a class="btn-floating btn-large red pulse">
                    <i class="large material-icons">playlist_add</i>
                  </a>
                  <ul>
                    <li ><a id="alternar-respuesta-2" class="btn-floating red"><i class="material-icons">language</i></a></li>
                    <li ><a id="alternar-respuesta-3" class="btn-floating yellow darken-1"><i class="material-icons">stars</i></a></li>
                    <li ><a  id="alternar-respuesta-4" class="btn-floating green"><i class="material-icons">work</i></a></li>
                    <li ><a  id="alternar-respuesta-5" class="btn-floating blue"><i class="material-icons">verified_user</i></a></li>
                    <li ><a  id="alternar-respuesta-6" class="btn-floating cyan"><i class="material-icons">assignment</i></a></li>
                    <li ><a  id="alternar-respuesta-7" class="btn-floating cyan"><i class="material-icons">group</i></a></li>
                    <li ><a  id="alternar-respuesta-8" class="btn-floating cyan"><i class="material-icons">person</i></a></li>
                  </ul>
                </div>


                <div class="respuesta-2 " style="display:none">

                <blockquote>
                 <h5>Notas de Noticia </h5>
                </blockquote>

                  <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="noticia_nacional"></div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="first_name" type="text" class="validate nombre_nota_n">
                          <label for="first_name">Nombre de la Nota</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="last_name" type="text" class="validate previa_nota_n">
                          <label for="last_name">Previa de la Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <textarea  id="textarea1" class="materialize-textarea nota_nota_n"></textarea>
                          <label for="disabled">Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">insert_photo</i>
                          <input  id="imagen_nota_n" type="text" class="validate ">
                          <label for="password">Imagen de Nota</label>
                        </div>
                      </div>
                      <input type="hidden"  class="date_nota_n" value="<?php echo date("Y-m-d") ?>">
                      <div class="row">
                          <div class="input-field col s12 ">
                          <i class="material-icons prefix">insert_drive_file</i>
                            <select id="principal_nota_n">
                              <option value="0">Selecciona una Opcion</option>

                              <option value="1">Si</option>
                              <option value="2">No</option>
                            </select>
                            <label>Nota Principal</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_noticia" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>  


                <div class="respuesta-3" style="display:none">

                <blockquote>
                 <h5>Notas Deportes </h5>
                </blockquote>

                  <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="noticia_deportes"></div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="first_name" type="text" class="validate nombre_nota_d">
                          <label for="first_name">Nombre de la Nota</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="last_name" type="text" class="validate previa_nota_d">
                          <label for="last_name">Previa de la Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <textarea  id="textarea1" class="materialize-textarea nota_nota_d"></textarea>
                          <label for="disabled">Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">insert_photo</i>
                          <input   type="text" class="validate imagen_nota_d">
                          <label for="password">Imagen de Nota</label>
                        </div>
                      </div>
                      <input type="hidden"  class="date_nota_d" value="<?php echo date("Y-m-d") ?>">
                      <div class="row">
                          <div class="input-field col s12 ">
                          <i class="material-icons prefix">insert_drive_file</i>
                            <select id="principal_nota_d">
                              <option value="0">Selecciona una Opcion</option>

                              <option value="1">Si</option>
                              <option value="2">No</option>
                            </select>
                            <label>Nota Principal</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_deportes" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>  


                 <div class="respuesta-4" style="display:none">

                 <blockquote>
                 <h5>Politica </h5>
                </blockquote>

                  <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="noticia_politica"></div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="first_name" type="text" class="validate nombre_nota_p">
                          <label for="first_name">Nombre de la Nota</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="last_name" type="text" class="validate previa_nota_p">
                          <label for="last_name">Previa de la Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <textarea  id="textarea1" class="materialize-textarea nota_nota_p"></textarea>
                          <label for="disabled">Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">insert_photo</i>
                          <input   type="text" class="validate imagen_nota_p">
                          <label for="password">Imagen de Nota</label>
                        </div>
                      </div>
                      <input type="hidden"  class="date_nota_p" value="<?php echo date("Y-m-d") ?>">
                      <div class="row">
                          <div class="input-field col s12 ">
                          <i class="material-icons prefix">insert_drive_file</i>
                            <select id="principal_nota_p">
                              <option value="0">Selecciona una Opcion</option>

                              <option value="1">Si</option>
                              <option value="2">No</option>
                            </select>
                            <label>Nota Principal</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_politica" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                 <div class="respuesta-5" style="display:none">

                 <blockquote>
                 <h5>Notas de Seguridad </h5>
                </blockquote>

                  <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="noticia_seguridad"></div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="first_name" type="text" class="validate nombre_nota_s">
                          <label for="first_name">Nombre de la Nota</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="last_name" type="text" class="validate previa_nota_s">
                          <label for="last_name">Previa de la Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <textarea  id="textarea1" class="materialize-textarea nota_nota_s"></textarea>
                          <label for="disabled">Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">insert_photo</i>
                          <input   type="text" class="validate imagen_nota_s">
                          <label for="password">Imagen de Nota</label>
                        </div>
                      </div>
                      <input type="hidden"  class="date_nota_s" value="<?php echo date("Y-m-d") ?>">
                      <div class="row">
                          <div class="input-field col s12 ">
                          <i class="material-icons prefix">insert_drive_file</i>
                            <select id="principal_nota_s">
                              <option value="0">Selecciona una Opcion</option>

                              <option value="1">Si</option>
                              <option value="2">No</option>
                            </select>
                            <label>Nota Principal</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_seguridad" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                  <?php 
                  $objData = new Database();

                  $sth3 = $objData->prepare('SELECT nombre_columnista,apellido_columnista FROM `columnistas`  ');

                  $sth3->execute();

                  $result3 = $sth3->fetchAll();
                  ?>

                 <div class="respuesta-6" style="display:none">

                 <blockquote>
                 <h5>Columna </h5>
                </blockquote>

                <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="add_columna"></div>
                      <div class="row">
                          <div class="input-field col s12">
                          <i class="material-icons prefix">account_circle</i>
                            <select id="nombre_columnista_colum">
                           
                            <?php
                            if($result3){
                              foreach ($result3 as $key => $value) {
                             
                            ?>
                            <option value="<?php echo $value['nombre_columnista'].$value['apellido_columnista']; ?>"><?php echo$value['nombre_columnista'].$value['apellido_columnista']; ?></option> 
                            <?php 
                            }                            
                             }
                             ?>
                             </select>
                            <label>Nombre del Columnista</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">format_color_text</i>
                          <input id="titulo_columnista" type="text" class="validate">
                          <label for="first_name">Titulo de Columna</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">format_align_left</i>
                          <textarea  id="nota_columnista" class="materialize-textarea"></textarea>
                          <label for="disabled">Nota del Columnista</label>
                        </div>
                      </div>
       
                      <input type="hidden"  id="date_nota" value="<?php echo date("Y-m-d") ?>">

                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_columna" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              <div class="respuesta-7" style="display:none">

                 <blockquote>
                 <h5>Agregar Usuario del Sistema </h5>
                </blockquote>

                <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="add_usuario"></div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                          <input  id="nombre_usuario" type="text" class="validate">
                          <label for="first_name">Nombre del Usuario</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">dialpad</i>
                          <input  id="password_usuario" type="password" class="validate">
                          <label for="last_name">Password del Usuario</label>
                        </div>
                      </div>
                      <div class="row">
                          <div class="input-field col s12">
                          <i class="material-icons prefix">supervisor_account</i>
                            <select id="tipo_usuario">
                              <option value="0" disabled selected>Selecciona una Opcion</option>

                              <option value="1">Administrador</option>
                              <option value="2">Usuario</option>
                            </select>
                            <label>Tipo de Usuario</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_usuario" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


            <div class="respuesta-8" style="display:none">

                 <blockquote>
                 <h5>Agregar Columnista </h5>
                </blockquote>

                <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="columnista_add"></div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_circle</i>
                            <input id="add_nombre" type="text" class="validate ">
                            <label for="icon_prefix">Nombre del Columnista</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                          <input  id="add_apellido" type="text" class="validate ">
                          <label for="last_name">Apellido del Columnista</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">panorama</i>
                          <input  id="add_img" type="text" class="validate ">
                          <label for="disabled">Imagen del columnista</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col s12">
                         <button class="btn waves-effect waves-light enviar_columnista" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
        



              </div>

              <div id="div-results3"></div>
              <div id="div-results2"></div>
              <div id="div-results4"></div>
              <div id="div-results5"></div>
