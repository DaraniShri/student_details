<?php
     include 'class_connection.php';
     if(isset($_POST["id"])){
          $id=$_POST["id"];
          $name=$_POST["user_name"];
          $password=$_POST["password"];
          $email=$_POST["e_mail"];
          $gender=$_POST["gender"];
          $skills=$_POST["skills"];
          $skills_update=implode(",",$skills);
          $db_connection=$class_db->getdbconnection();
          $test=mysqli_query($db_connection,"update registration set username='$name', password='$password', email='$email', skills='$skills_update' where id=$id");
          if(!$test){
               echo "invalid query";
          }
          echo "Updated successfully successfully";
     }
     header("location:/view_student.php");
     exit;
?>