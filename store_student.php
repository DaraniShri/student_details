<?php
      include 'class_connection.php';
     if(isset($_POST['submit'])){
          $db_connection=$class_db->getdbconnection();
          $name=$_POST['user_name'];
          $password=$_POST['password'];
          $email=$_POST['e_mail'];
          $gender=$_POST['gender'];
          $skills=$_POST['skills'];
          $skill_array="";
          foreach($skills as $key){
               $skill_array .= $key.",";
          }
          $city=$_POST["cities"];
          mysqli_query($db_connection,"insert into registration".
          "(username,password,email,gender,skills,city) values ".
          "('$name','$password','$email','$gender','$skill_array','$city');");
          echo "Inserted successfully";
     }
?>