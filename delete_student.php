<?php
     include 'class_connection.php';
     if(isset($_GET["id"])){
          $id=$_GET["id"];
          $class_db=new dbconnection();//class obj
          $dbstatus=$class_db->getdbconnection();
          mysqli_query($dbstatus,"delete from registration where id=$id");
          echo "Deleted successfully";
     }
     header("location:/view_student.php");
     exit;
?>