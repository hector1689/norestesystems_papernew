<?php
require '../../class/database.php';

$objData = new Database();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];

$imagen=$_POST['imagen'];


if ( $nombre == null || $apellidos == null || $imagen == null ) {
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

$sth = $objData->prepare("INSERT INTO columnistas (nombre_columnista,apellido_columnista,imagen_columnista) VALUES ('".$nombre."','".$apellidos."','".$imagen."')");

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