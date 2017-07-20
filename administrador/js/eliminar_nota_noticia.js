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

		ajax.open("GET", "php/eliminar_noticia.php?id="+id);
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

