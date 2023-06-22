<?php
      include 'class_connection.php';
     if(isset($_POST['submit'])){
          
          $db_connection=$class_db->getdbconnection();
          $name=$_POST['user_name'];
          $password=$_POST['password'];
          $email=$_POST['e_mail'];
          mysqli_query($db_connection,"insert into registration(username,password,email) values ('$name','$password','$email');");
          echo "Inserted successfully";
     }
?>