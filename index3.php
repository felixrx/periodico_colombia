<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" Content="text/html; charset-iso-8859-1">
	<title></title>
	<link rel="stylesheet" href="ESTILOS/estilo1.css">
	
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Chewy|Courgette|Nanum+Myeongjo|Roboto+Condensed|Staatliches&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Playfair+Display+SC:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chewy|Nanum+Myeongjo|Roboto+Condensed|Staatliches&display=swap" rel="stylesheet">
	<!--------estilos de responsive-->
	<link rel="stylesheet" href="estilos response/index_response.css">
	<style>
	h1{font-family: 'Neucha', cursive;}
	
	</style>
	
	<style>
		h4{
			font-family: 'Chewy', cursive;
font-family: 'Nanum Myeongjo', serif;
font-family: 'Staatliches', cursive;
font-family: 'Roboto Condensed', sans-serif;
font-family: 'Courgette', cursive;
font-family: 'Barlow Semi Condensed', sans-serif;
font-family: 'Be Vietnam', sans-serif;
		}
		}
	</style>
	<style>
		h3{
			font-family: 'Playfair Display SC', serif;
font-family: 'Handlee', cursive;
		}
	</style>
<style>
	   h2{font-family: 'Playfair Display SC', serif;
	}
</style>
</head>
<body>

		<header>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
			<style> 

#panel {
 
 
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}
#panel {

  display: none;
}
</style>


<?php 


error_reporting(0);
$alert = $_GET['error'];

if ($alert=== 'si') {

	echo "<script> 

	alert('Usuario  o Clave Incorrecta..');
	history.back();

</script>";
	# code...
}


?>



			<div id="flip"   style="display:flex;
	cursor: pointer;
	border-bottom: 3px solid #fff;
	text-decoration: none;
	color: #fff; width: 50px; position: relative; top: 50px;display:flex;
	list-style: none;
	margin-left: 20px;
	padding-bottom: 10px;
	text-decoration: none;font-family: sans-serif;
	font-size: 20px;
	font-style: bold;


 ;
	">Entrar</div>



			
		<div id="panel" style="background-color: white; width: auto; height: auto; float: left;  position: absolute;  left: 43px;  top: 90px;  z-index: 999; border-radius: 10px 10px 10px 10px;">
					
			<form  method="post" action="login/sesion.php">
  				<div class="form-group" style="padding:20px;">
  				  <label >Usuario</label>
  				  <br>
  				  <input type="text" class="form-control" id="usuario" name="usuario">
  					<br>
  					<br>
  				  <label >Clave:</label>
  				  <br>
  				  <input type="password" class="form-control" id="clave" name="clave">
  				
  				<br>
  				<br>
  				<button type="submit" class="btn btn-primary" >Enviar</button>
  				</div>
			</form>

		</div>
		<div class="conteiner">


			
		</h4>Jimenista siempre arriba<h4>
			<div class="vinculos">
				
					<li><a href="index.php">Inicio</a></li>
					<li><a href="tecnologia.php">Tecnologia</a></li>
					<li><a href="deportes.php">Deportes</a></li>
					<li><a href="cultura.php">Cultura</a></li>
				
			</div>
		</div>

		<div class="contenedor2">
			<p><h1>PERIODICO</h1></p> 
			<ul> 

			
			<li><h1>JIMENISTA</h1></li> 
			<li><h1>VIRTUAL</h1></li> 
			<li><h1>JIMENISTA</h1></li> 
			</ul>
		</div>
		
	</header>
	
	
	<!------seccion de noticia ---------->

	<div class="contenedor">
			<div class="cont-1">
				<h1 class="titulo"><font face="Trebuchet MS"> <a href="cultura.html"><h4>¿Por qué la batería de su celular podría explotar o incendiarse?</h4> </a> </p> </font>
				<div class="div-img">
					<img src="imagenes/Tec1.JPG" alt="">
				</div>
				<font face="Trebuchet MS"><p>
												
					</p>
				</p></h5></p></font>
				</p>
			</div>
			<div class="cont-1">
				<h1 class="titulo"><font face="Trebuchet MS"> <a href="cultura.html"><h4>Así brilla Natalia Reyes en el nuevo adelanto de 'Terminator'</h4> </a> </p> </font>
				<div class="div-img">
					<img src="imagenes/cul6.JPG" alt="">
				</div>
				<font face="Trebuchet MS"><p>
												
					</p>
				</p></p></font>
				</p>
			</div>
	
			<div class="cont-2">
					
				<div class="bloque bloque-1">
					<div class="img-1">
						<img src="imagenes/imagen2.JPG" alt="">
					</div>
					<a href="deportes.html"><h4>INICIO DE ACTIVIDADES DEPORTIVAS Y CULTURALES </h4></a> <br> <h4> Se da inicio a las actividades culturales y deportivas en la institucion luego de una gran espera y los estudiantes con ansias de praticar sus actividades preferidas.</h4></p>
				</div>

				<hr>
				 <div class="bloque bloque-2">
					<div class="img-1">
						<img src="imagenes/cientifico.jpg" alt="">
					</div>
					<a href="tecnologia.html"><h4>LA IMPORTANCIA DE APRENDER NUEVAS LENGUAS</h4> </a> <br> <p> <h4> Un gran articulo escrito por el estudiante Cristian David Montañez Martinez de grado noveno nos relata la importancia de aprender nuevas lenguas.</h4></p>
				</div> <p></p>
				
				<hr>
			</div>
		</div>
		
		
		<!--------------------------->
			
		<footer>
			<section class="footer-info">
				<h2>STRATE</h2>
		 <br> <p> <h3> La mejor opcion que podras encontrar para el diseño y desarrollo de tu pagina web, contamos con los mejores precios ademas de un trabajo eficaz y de calidad </h3> </p> 
			</section>
	
			<div class="redes-sociales">
				
				<li class="facebook"><a href="google.com" ><i class="fab fa-facebook"></i></a></li>
	</p>
				<li class="youtube"><a href="#" class=""><i class=" fab fa-youtube"></i></a></li>
				<li class="whatsapp"><a href="#" ><i class="fab fa-whatsapp"></i></ali>
				
			</div>
	
	
		<div class="contacto">
			<h2>Contactanos</h2>
				<STYLE>A {text-decoration: none;} </STYLE> <i class="fas fa-phone"></i> <h4>  Telefono: 3174887178 </h4>
				<p><i class="fas fa-map-marker-alt"></i> <h4> Direccion: Calle 7B #25 37  </h4>
				<p><i class="fas fa-at"></i><h4>Email: stratecompany@gmail.com</h4>
		</div>
	</footer>
		
	</body>
	</html>