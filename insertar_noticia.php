<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	




<?php 
include_once('conexion/conexion.php');

$type=$_FILES['img_up']['type'];
$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
//Creamos una nueva ruta (nuevo path)
//Así guardaremos nuestra imagen en la carpeta "images"
$nuevo_path="imagenes/".$name;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
# $tmp_name: la ruta temporal del fichero
# $nuevo_path: la nueva ruta que creamos
move_uploaded_file($tmp_name,$nuevo_path);
//Extraer la extensión del archivo. P.e: jpg
# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
$array=explode('.',$nuevo_path);
# Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext= end($array);
//Imprimimos un texto de subida exitosa.






$codigo_noticia=$_POST['codigo_noticia'];
$titulo=$_POST['titulo'];
$subtitulo=$_POST['subtitulo'];

$noticia=$_POST['noticia'];
$fecha=$_POST['fecha'];
$status=$_POST['status'];


$categoria=$_POST['categoria'];



$queryInsertar = $mysqli->query("INSERT INTO noticias (id,codigo_noticia,titulo,subtitulo,noticia,fecha,status,categoria,imagen)
 values ( null,'$codigo_noticia','$titulo','$subtitulo','$noticia','$fecha','$status','$categoria','$nuevo_path')");

  header ('Location: admin/admin.php');

  ?>




</body>
</html>