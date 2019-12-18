<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="BaulPHP">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>


<!-- Begin page content -->
<div  style="float: right; background-color: black; width: 100px; height: 20px; position: top; margin: 0px; top: 0px; border-radius: 0px 0px 0px 10px; color:white; padding-left: 20px;"> <a style="color:white;" href="../admin/cerrar.php">Salir</a>  </div>


<div class="container">

  <h3 class="mt-5">Publicar Notcias</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      <div id="results"></div>
      <div id="loader"></div>
      <script type="text/javascript">
    function showRecords(CantidadPagina, PaginaNumero) {
        $.ajax({
            type: "GET",
            url: "GetDatos.php",
            data: "PaginaNumero=" + PaginaNumero,
            cache: false,
    		beforeSend: function() {
                $('#loader').html('<img src="img/loader.png" alt="reload" width="20" height="20" style="margin-top:10px;">');
    			
            },
            success: function(html) {
                $("#results").html(html);
                $('#loader').html(''); 
            }
        });
    }
    
    $(document).ready(function() {
        showRecords(10, 1);
    });
</script>
      <div style="clear:both">
        <p>&nbsp;</p>
      </div>
      
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">

    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 



<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>