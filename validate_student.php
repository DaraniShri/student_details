<?php
include 'db/class_connection.php';
     if(isset($_POST['submit'])){
          global $class_db;
          $username=$_POST['user_name'];
          $password=$_POST['password'];
          $hash_password=password_hash($password,PASSWORD_DEFAULT);
          $mydb_connection=$class_db->getdbconnection();
          if(!$mydb_connection){
               echo "Something went wrong check your connection...";
          }
          else{
               $select_query="select * from registration where username='$username'";
               $result=mysqli_query($mydb_connection,$select_query);
               $count=mysqli_num_rows($result);
               if($count==1){
                    while($row=mysqli_fetch_assoc($result)){
                         $verification=password_verify($password,$row['password']);
                         if($verification){
                              session_start();
                              $_SESSION['isLogin']=true;
                              $_SESSION['username']=$username;
                              header("location: forms/dashboard.php");
                         }
                         else{
                              echo "Wrong password";
                         }
                    }
               }
               else{
                    echo "Invalid credentials";
               }
          }
     }
?>