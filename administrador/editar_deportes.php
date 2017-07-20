<?php 

include("../class/database.php");

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM cat_deportes  WHERE  id = :id');


$id = $_GET['id'];

$sth->bindParam(':id',$id);

$sth->execute();




$result = $sth->fetchAll();




 ?> 

 <input type="hidden" value="<?php echo $result[0]['id']; ?>" class="id"  >


                <blockquote>
                 <h5>Editar Notas de Deportes </h5>
                </blockquote>

                  <div class="row">
                    <div class="col s12 z-depth-5">
                    <div style="height: 30px;"></div>
                    <div id="noticia_nacional"></div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="first_name" placeholder="Placeholder" type="text" class="validate nombre_nota_n" value="<?php echo $result[0]['titulo_mundo']; ?>">
                          <label for="first_name">Nombre de la Nota</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <input  id="last_name" type="text" class="validate previa_nota_n" value="<?php echo $result[0]['previo_titulo_mundo']; ?>">
                          <label for="last_name">Previa de la Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                          <textarea  id="textarea1" class="materialize-textarea nota_nota_n"><?php echo $result[0]['articulo_mundo']; ?></textarea>
                          <label for="disabled">Nota</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">insert_photo</i>
                          <input  id="imagen_nota_n" type="text" class="validate " value="<?php echo $result[0]['imagen_mundo']; ?>">
                          <label for="password">Imagen de Nota</label>
                        </div>
                      </div>
                      <input type="hidden"  class="date_nota_n" value="<?php echo date("Y-m-d") ?>">
                      <div class="row">
                          <div class="input-field col s12 ">
                          <i class="material-icons prefix">insert_drive_file</i>
                            <select id="principal_nota_n">
                            <?php if($result[0]['urgente_nota'] ==1){?>
							<option value="<?php echo $result[0]['urgente_nota']; ?>">Si</option>

							<?php
							 }else{?>
							 	<option value="<?php echo $result[0]['urgente_nota']; ?>">No</option>
							<?php
							 	}?>
                            
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
     <script>
$(document).ready(function(){ 



  $('select').material_select();

});
</script>  
