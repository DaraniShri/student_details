<?php
     include 'class_connection.php';
     if(isset($_GET["id"])){
          $id=$_GET["id"];
          $name=$_GET[""];
          $password=$_GET[""];
          $email=$_GET[""];
          
          $db_connection=$class_db->getdbconnection();
          mysqli_query($db_connection,"update registration set username=$name, password=$password, email=$email where id=$id");
          echo "Updated successfully successfully";
     }
     header("location:/view_student.php");
     exit;
?>