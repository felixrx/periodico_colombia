<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tecnologia</title>
	<link rel="stylesheet" href="ESTILOS/deporte.css">
	<link rel="stylesheet" href="ESTILOS/estilo1.css">
	<link rel="stylesheet" href="ESTILOS/tecnologia.css">
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
	<section class="dep-secc1">
			<div class="caja1">
				<H1> <font face="Trebuchet MS">TECNOLOGIA</p> </font> </H1>

			</div>
	

		</section>
		
		<section class="galeria-tec">

			
<?php
include('conexion/conexion.php');

$sql = "SELECT * FROM noticias where status='activa' and categoria='Tecnologia' order by id DESC LIMIT 6";
    $query = $mysqli->query($sql);
       if (mysqli_num_rows($query) > 0 )
          {
             while (($fila=mysqli_fetch_array($query)))
                {
      
            $id =$fila['id'];
                 
 			      $titulo =$fila['titulo'];
 			      $noticia =$fila['noticia'];
     				 $imagen =$fila['imagen'];
      ?>

			<div class="gal-hijo ">
				<div class="lado  delante">  <img style="width: 100%; height: 100%;" src="<?php echo "". $imagen =$fila['imagen'] ; ?>" alt="">  </div>
				<div class="lado atras">
					
					<h1><?php echo "".$titulo =$fila['titulo']; ?></h1>
					<p style="text-align: justify;
  text-justify: inter-word;"><?php echo "".$noticia =$fila['noticia']; ?></p>
				</div>
			</div>


 <?php } ?>
  <?php } ?>










			
			
			
		</section>







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