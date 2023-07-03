<?php
     include('../store_student.php');
     session_start();
     if(!isset($_SESSION['username'])){
          header("location: login_student.php");
     }
?>
<html>
     <head>
          <title>Student Details</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <style>
          .container{
               border:2px solid black;
          }
          #back{
               text-align:center;
          }
     </style>
     </head>
     <body>
     <?php
          require '..\common\header.html';
     ?>
     <div class="container">
          <div class="row">
               <div class="col-4">
               </div>
               <div class="col-4">
                    <form class="form-horizontal" action="../store_student.php" method="POST">
                         <div class="form-group">
                              <label class="control-label col-sm-2" for="user_name">Username:</label>
                              <div class="col-sm-4">
                                   <input type="text" class="form-control" id="user_name" placeholder="Enter username" name="user_name">
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="control-label col-sm-2" for="password">Password:</label>
                              <div class="col-sm-4">          
                                   <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Email:</label>
                              <div class="col-sm-4">
                                   <input type="email" class="form-control" id="email" placeholder="Enter email" name="e_mail">
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Gender:</label>
                              <div class="col-sm-4">
                                   <input type="radio" class="form-check-input" name="gender" value="male">male
                                   <input type="radio" class="form-check-input" name="gender" value="female">female
                              </div> 
                         </div>  
                         <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Skills:</label>
                              <div class="col-sm-4">
                                   <input type="checkbox" name="skills[]" value="java">java
                                   <input type="checkbox" name="skills[]" value="js">js
                                   <input type="checkbox" name="skills[]" value="php">php
                                   <input type="checkbox" name="skills[]" value="css">css
                              </div>
                         </div>
                         <div class="form-group">
                              <label class="control-label col-sm-2" for="email">City:</label>
                              <div class="col-sm-4">
                              <select id="cities" name="cities">
                                        <option value="madurai">Madhurai</option>
                                        <option value="chennai">Chennai</option>
                                        <option value="sivakasi">Sivakasi</option>
                                        <option value="theni">Theni</option>
                                   </select> 
                              </div>
                         </div>
                         <div class="form-group">        
                              <div class="col-sm-offset-2 col-sm-4">
                                   <input class="btn btn-success" type="submit" value="submit" name="submit">
                              </div>
                         </div>
                    </form> 
               </div>
               <div class="col-4">
               </div>     
          </div>
     </div> 
     <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-4" id="back">
               <a href="dashboard.php" class="btn btn-primary">Back</a>
          </div>
     </div>  
     <?php
          require '..\common\footer.html';
     ?>           
     </body> 
</html>