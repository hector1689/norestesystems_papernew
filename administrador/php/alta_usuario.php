<?php
require '../../class/database.php';

$objData = new Database();

$nombre=$_POST['nombre'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];



if ( $nombre == null || $password == null || $tipo == null ) {
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

$sth = $objData->prepare("INSERT INTO users (loginUsers,passUsers,idprofile) VALUES ('".$nombre."','".$password."','".$tipo."')");

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