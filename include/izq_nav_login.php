  <div class="collection z-depth-5 enlace">
        <a href="administrador/table_noticias.php" class="collection-item">Publicaciones Noticias <i class="Tiny material-icons">public</i></a>
        <a href="administrador/table_deportes.php" class="collection-item">Publicaciones Deportes <i class="Tiny material-icons">stars</i></a>
        <a href="administrador/table_politica.php" class="collection-item">Publicaciones Politica <i class="Tiny material-icons">work</i></a>
        <a href="administrador/table_seguridad.php" class="collection-item">Publicaciones Seguridad <i class="Tiny material-icons">security</i></a>
        <a href="administrador/table_usuarios.php" class="collection-item">Publicaciones Usuario <i class="Tiny material-icons">group</i></a>
        <a href="administrador/table_columnistas.php" class="collection-item">Publicaciones Columnistas <i class="Tiny material-icons">person</i></a>
        <a href="administrador/table_columna.php" class="collection-item">Publicaciones Columnas <i class="Tiny material-icons">assignment</i></a>
   </div>

     <script>
      $(document).ready(function() {
$(".enlace a").each(function(){
              var href = $(this).attr("href");
              $(this).attr({ href: "#"});
              $(this).click(function(){
                 $("#div-results").load(href);
              });
           });

 });
</script>