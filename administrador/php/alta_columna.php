<?php
require '../../class/database.php';

$objData = new Database();

$nombre=$_POST['nombre'];
$titulo=$_POST['titulo'];
$date=$_POST['date'];
$nota=$_POST['nota'];


if ( $nombre == null || $titulo == null || $nota == null ) {
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

$sth = $objData->prepare("INSERT INTO nota_columnista (titulo_columna,nota_columna,nombre_columnista,date_nota_columna) VALUES ('".$titulo."','".$nota."','".$nombre."','".$date."')");

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