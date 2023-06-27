<?php
     include 'db/class_connection.php';
     if(isset($_POST["id"])){
          $id=$_POST["id"];
          $name=$_POST["user_name"];
          $email=$_POST["e_mail"];
          $gender=$_POST["gender"];
          $skills=$_POST["skills"];
          $skills_update=implode(",",$skills);
          $city=$_POST["cities"];
          $db_connection=$class_db->getdbconnection();
          $test=mysqli_query($db_connection,"update registration set username='$name', email='$email', skills='$skills_update', city='$city' where id=$id");
          if(!$test){
               echo "invalid query";
          }
          echo "Updated successfully";
     }
     header("location:/view_student.php");
     exit;
?>