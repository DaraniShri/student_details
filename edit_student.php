<?php
     include 'class_connection.php';
     $db_connection=$class_db->getdbconnection();
     if($_SERVER['REQUEST_METHOD']=='GET'){
          if(!isset($_GET['id'])){
               header("location:/view_student.php");
               exit;
          }
          $id=$_GET["id"];
          $sql_query="select * from registration where id=$id";
          $result=$db_connection->query($sql_query);
          $row=$result->fetch_assoc();
          if(!$row){
               header("location:/view_student.php");
               exit;
          }
          $name=$row['username'];
          $password=$row['password'];
          $email=$row['email'];
     }
?>
<html>
     <head>
          <title>Student Details</title>
          <style>
               .container{
                    align-items:center;
               }
               .container table{
                    border:1px solid black;
                    border-collapse:collapse;
                    text-align:center;
                    background-color:aqua;
               }
               .container label{
                    background-color:white;
               }

          </style>
     </head>
     <body>
          <div class="container"> 
               <form action="store_student.php" method="POST">
                    <input type="hidden" >
                    <table>
                         <tr>
                              <td><label for="user_name">Username</label></td>
                              <td><input type="text" id="user_name" name="user_name"></td>
                         </tr>   
                         <tr>
                              <td><label for="password">Password</label></td>
                              <td><input type="password" id="password" name="password"></td>
                         </tr>
                         <tr>
                              <td><label for="e_mail">E-mail</label></td>
                              <td><input type="email" id="e_mail" name="e_mail"></td>
                         </tr>
                         <tr>
                              <td colspan="2"><input type="submit" value="submit" name="submit"></td>
                         </tr>
                    </table>
               </form> 
          </div>
     </body> 
</html>