			
<?php
include('conexion/conexion.php');


$id=$_POST['id'];

$sql = "SELECT * FROM noticias where id='$id' ";
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



 <?php } 
echo "id";
 ?>


  <?php } ?>