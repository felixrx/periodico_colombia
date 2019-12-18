<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrar Noticias</title>
</head>
<body>
	

<div  style="float: right; background-color: grey; width: 100px; height: 20px; border-radius: 0px 0px 0px 10px; color:white; padding-left: 20px;"> <a style="color:white;" href="cerrar.php">Salir</a>  </div>
<div  style="float: right; background-color: black; width: 100px; height: 20px; position: top; margin: 0px; top: 0px; border-radius: 0px 0px 0px 10px; color:white; padding-left: 20px;"> <a style="color:white;" href="../noticias/index.php">Noticias</a>  </div>



	<h1>Panel de administrador</h1>


<div>
	<form enctype="multipart/form-data" method="post" action="../insertar_noticia.php">
		

		<input type="hidden" name="codigo_noticia" value='<?php echo "".uniqid() ?>'>

		<label>
			Titulo:
		</label>
		<br>
	  <textarea name="titulo" rows="3" cols="30">
		  The cat was playing in the garden.</textarea>
		<br>
		<label>
			Sub-Titulo:
		</label>
		<br>
	  <textarea name="subtitulo" rows="3" cols="30">
		  The cat was playing in the garden.</textarea>
		<br>
		
		<label>
			Noticia:
		</label>
		<br>
		  <textarea name="noticia" rows="10" cols="30">
		  The cat was playing in the garden.</textarea>
		  <br>
		  <input type="date" name="fecha" value="<?php echo"".date("Y-m-d")?>">
			 <br>
		  <input type="hidden" name="status" value="activa">
		  
			<select name="categoria" value="">
				<option value="Tecnologia" >Tecnologia</option>
				<option value="Deporte">Deporte</option>
				<option value="Cultura">Cultura</option>
			</select>
			<br>
			<br>
        <input type="file" name="img_up">
        <input value="Guardar" type="submit">
        </form>

</div>


</body>
</html>