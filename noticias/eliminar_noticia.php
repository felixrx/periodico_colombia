<?php



 $mysqli = new mysqli("localhost","root","","periodico");

$id=$_POST['id'];

$sql = "DELETE  FROM noticias where id='$id' ";
    $query = $mysqli->query($sql);




           


  ?>