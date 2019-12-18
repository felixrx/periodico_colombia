<?php
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
  include_once('funciones.php');
  $campoobligado = 0; 
  $errorendato = 0; 
  session_start();
?>

 <script type="text/javascript" language="javascript" src="js/jslistadopaises.js"></script>
<?php
  include_once('conexion/conexion.php');
?>
<div class="col-md-12">
      <?php    $querybuscarh = $mysqli->query("SELECT * FROM usuario order by id desc ")  or die ( "<br>No se puede ejecutar query   para buscar datos P ". $mysqli->error);
         

?>


<div class="container contenido">
 
<div class="row">
<div class="col-md-10" align="left">

</div>
<div class="col-md-10" align="left">
<h1 align="left">Registro de Usuariossssssss</h1>
</div>
<div class="col-md-1 iconoss"><br><a href="menu_principal.php"><img src="imagenes/atras.png" alt=""></a></div>

<div class="col-md-1 iconos"><br><a href="registro_docente.php"><img src="imagenes/add_user.png" alt=""></a>
</div>
</div>

<div class="table-responsive">
  <table cellpadding="0" class="table" cellspacing="0" border="0" class="display" id="tabla_lista_usuarios" >
     <thead>
                    <tr>
                        <th>id</th><!--Estado-->
                        <th>usuario</th>
                        <th>Acciones</th><!--Estado-->
                        
                    </tr>
                </thead>
                 <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                     
                    </tr>
                </tfoot>
                
                <tbody>
    <?php  
 if (mysqli_num_rows($querybuscarh) > 0 )
    {
 
                                    while (($fila=mysqli_fetch_array($querybuscarh)))
                                    {
                                        $id=$fila['id'];
                                        $usuario= $fila['usuario'];
                                      
                                        
                                    


     ?>
  
      <td><?php echo $id=$fila['id'] ?></td>
      <td><?php echo $usuario=$fila['usuario'] ?></td>
      <td><a href="edit_profesor.php?id_profesor=<?php echo $id_profesor; ?>"><img src="imagenes/edit.png" alt=""></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="delete_profesor.php?id_profesor=<?php echo $id_profesor; ?>"><img src="imagenes/delete.png" alt=""></a></td>


    </tr>

      <?php } ?>
      <?php } ?>
      </tbody>
  </table>
  </div>
</div>









    </div>

  </div>

</div>

<div>