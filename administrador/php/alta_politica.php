<?php
require '../../class/database.php';

$objData = new Database();

$urgente=$_POST['principal'];
$nombre_nota=$_POST['nombre'];
$previa_nota=$_POST['previa'];
$nota=$_POST['nota'];
$fecha=$_POST['date'];
$imagen=$_POST['imagen'];


if ( $nombre_nota == null || $previa_nota == null || $nota == null || $imagen == null || $urgente == null) {
echo '
	<script>
		swal({
			  title: "Cuidado!",
			   text: "Campo(s) Vacio(s).",
			  type: "warning"
		});
	</script>
	';
}else {

$sth = $objData->prepare("INSERT INTO cat_politica (titulo_politica,articulo_politica,date_politica,previo_titulo_politica,imagen_politica,urgente_nota) VALUES ('".$nombre_nota."','".$nota."','".$fecha."','".$previa_nota."','".$imagen."','".$urgente."')");

$sth->execute();
if($sth){
	echo '
	<script>
		swal({
			  title: "Felicidades!",
			  text: "Se ha dado de Alta",
			  type: "success",
			  timer: 30000000,
		});location.reload();
	</script>
	';
}

}
?>