<?php
     include 'db/class_connection.php';
     if(isset($_GET["id"])){
          $id=$_GET["id"];
          $db_connection=$class_db->getdbconnection();
          mysqli_query($db_connection,"delete from registration where id=$id");
          echo "Deleted successfully";
     }
     header("location:/forms/view_student.php");
     exit;
?>