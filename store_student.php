<?php
     include 'class/class_student.php';
     if(isset($_POST['submit'])){  
          $name=$_POST['user_name'];
          $password=$_POST['password'];
          $hash_password=password_hash($password, PASSWORD_DEFAULT);
          $email=$_POST['e_mail'];
          $gender=$_POST['gender'];
          $skills=$_POST['skills'];
          $skill_array="";
          foreach($skills as $key){
               $skill_array .= $key.",";
          }
          $city=$_POST["cities"];
          $isInserted=$student_details->insertStudent($name,$hash_password,$email,$gender,$skill_array,$city); 
          if($isInserted){
               echo "Inserted successfully";
          }
     }
?>