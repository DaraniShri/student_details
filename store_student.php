<?php
     if(isset($_POST['submit'])){
          $conn=mysqli_connect("localhost","root","","student");
          if ($conn->connect_error) {
               die("Connection failed: ". $conn->connect_error);
          }
          $name=$_POST['user_name'];
          $password=$_POST['pasword'];
          $email=$_POST['e_mail'];
          mysqli_query($conn,"insert into registration(username,password,email) values ('$name','$password','$email');");
          echo "Inserted successfully";
     }
?>