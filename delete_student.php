<?php
     if(isset($_GET["id"])){
          $id=$_GET["id"];
          $conn=mysqli_connect("localhost","root","","student");
          if ($conn->connect_error) {
               die("Connection failed: ". $conn->connect_error);
          }
          mysqli_query($conn,"delete from registration where id=$id");
          echo "Deleted successfully";
     }
     header("location:/view_student.php");
     exit;
?>