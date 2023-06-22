<?php
     include 'class_connection.php';
     if(isset($_GET["id"])){
          $id=$_GET["id"];
          $db_connection=$class_db->getdbconnection();
          mysqli_query($db_connection,"delete from registration where id=$id");
          echo "Deleted successfully";
     }
     header("location:/view_student.php");
     exit;
?>