<?php



 $conn = new mysqli("localhost","root","","periodico");


 $id=$_POST['id'];

$sql = "SELECT * FROM noticias WHERE id = '$id'";



  $query = $conn->query($sql);
     if (mysqli_num_rows($query) > 0 )
        {
          while (($fila=mysqli_fetch_array($query)))
            {
              $id =$fila['id'];
              $status = $fila['status'];
                

              






            } 

        }


             if (($status) === 'activa') {

                   
                     $queryUpdate = $conn->query("UPDATE noticias SET status='inactiva' where  id='$id'");


                      


                  # code...
                } 

            if (($status) === 'inactiva') {

                   
                     $queryUpdate = $conn->query("UPDATE noticias SET status='activa' where  id='$id'");


                  # code...
                } 


  ?>