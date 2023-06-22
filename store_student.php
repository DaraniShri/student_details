<?php
      include 'class_connection.php';
     if(isset($_POST['submit'])){
          
          $dbstatus=$class_db->getdbconnection();
          $name=$_POST['user_name'];
          $password=$_POST['password'];
          $email=$_POST['e_mail'];
          mysqli_query($dbstatus,"insert into registration(username,password,email) values ('$name','$password','$email');");
          echo "Inserted successfully";
     }
?>