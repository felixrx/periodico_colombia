



<link rel="stylesheet" type="text/css" href="bootstrap.css">

<?php
require_once ("../conexion/conexion.php");

if (! (isset($_GET['PaginaNumero']))) {
    $PaginaNumero = 1;
} else {
    $PaginaNumero = $_GET['PaginaNumero'];
}

$CantidadPagina = 1;

$sql = "SELECT * FROM noticias  WHERE 1";

if ($result = mysqli_query($mysqli, $sql)) {
    $rowCount = mysqli_num_rows($result);
    mysqli_free_result($result);
}

$pagesCount = ceil($rowCount / $CantidadPagina);

$lowerLimit = ($PaginaNumero - 1) * $CantidadPagina;

// Controlar las tildes y ñ en los resultados desde MySQL
mysqli_set_charset($mysqli,"utf8");

$sqlQuery = " SELECT * FROM noticias WHERE 1 limit " . ($lowerLimit) . " ,  " . ($CantidadPagina) . " ";
$results = mysqli_query($mysqli, $sqlQuery);

?>

<table class="table">
  <thead class="thead-dark">
   <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo</th>
        <th scope="col">Noticia</th>
        <th scope="col">Categoria</th>
        <th scope="col">Status</th>
        <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $data) { ?>
    <tr>


     <td align="left"><input type="text"  class="id" value="<?php echo $data['id'] ?>"></td>


<td align="left"  >  <?php echo $data['titulo'] ?></td>

        <td align="left"> <?php echo $data['noticia'] ?></td>






        <td align="left"><?php echo $data['categoria'] ?></td>

        <td align="left">



        	<?php if ($data['status'] === 'inactiva'){?>


        		

<a href=""  class="btn btn-danger btn-sm inactiva" ><span ></span> Inactiva</a>

        	 



<?php


        	} else { ?>

<a href=""  class="btn btn-success btn-sm activa" ><span ></span> Activa</a>
       		
        	<?php }; ?>


        	




        </td>
        <td><a href=""  class="btn btn-danger btn-sm eliminar" ><span ></span> Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
    
      </tbody>
</table>

<div style="height: 30px;"></div>
<table width="100%" align="center">
    <tr>

        <td valign="top" align="left"></td>


        <td valign="top" align="center">
 <ul class="pagination">
 
	<?php
	for ($i = 1; $i <= $pagesCount; $i ++) {
    if ($i == $PaginaNumero) {
        ?> <li class="page-item active">
	      <a href="javascript:void(0);" class="page-link"><?php echo $i ?></a></li>
<?php
    } else {
        ?>
        
	    <li class="page-item">  <a href="javascript:void(0);" class="pages page-link"
           onclick="showRecords('<?php echo $CantidadPagina;  ?>', '<?php echo $i; ?>');"><?php echo $i ?></a></li>
<?php
    } // endIf
} // endFor

?>
</ul>

</td>
        <td align="right" valign="top">
	     Pagina <?php echo $PaginaNumero; ?> de <?php echo $pagesCount; ?>
	</td>
    </tr>
</table>

<script type="text/javascript">
    

$(document).ready(function(){
  $(".eliminar").click(function(){

var fila = $(this).parents("tr");
  var id = fila.find(".id").val();

   


$.ajax({

                url: "eliminar_noticia.PHP",
                method: "POST",
                    data: {id: id},
                success: function(data){


                  

        }
    })
 
  });
});
</script>




<script type="text/javascript">
    

$(document).ready(function(){
  $(".activa").click(function(){

var fila = $(this).parents("tr");
  var id = fila.find(".id").val();

   


$.ajax({

                url: "actualizar.php",
                method: "POST",
                    data: {id: id},
                success: function(data){


                  

        }
    })
 
  });
});
</script>


<script type="text/javascript">
    

$(document).ready(function(){
  $(".inactiva").click(function(){

var fila = $(this).parents("tr");
  var id = fila.find(".id").val();

   


$.ajax({

                url: "actualizar.php",
                method: "POST",
                    data: {id: id},
                success: function(data){


                  

        }
    })
 
  });
});
</script>
