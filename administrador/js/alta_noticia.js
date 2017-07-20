$(document).ready(function(){



$(".enviar_noticia").click(function(){
$("#noticia_nacional").show();


a=$(".nombre_nota_n").val();
b=$(".previa_nota_n").val();
c=$(".nota_nota_n").val();
d=$(".imagen_nota_n").val();
e=$(".principal_nota_n").val();
d=$(".date_nota_n").val();
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
    date:d
  },
  error: function(result){
alert("error petición ajax");
},
  success:function(result){
$("#noticia_nacional").html(result);
}});
});

});