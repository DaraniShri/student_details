<?php
     include('store_student.php');
?>
<html>
     <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <title>Student Details</title>
     </head>
     <body>
          <div class="container">
               <form action="store_student.php" method="POST">
               <div class="form-group">
                    <label for="user_name">Username</label>
                    <input type="text" id="user_name" name="user_name"> 
               </div>
               <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"> 
               </div> 
               <div class="form-group">       
                    <label for="e_mail">E-mail</label>
                    <input type="email" id="e_mail" name="e_mail">
               </div>
               <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" class="form-check-input" name="gender" value="male">male
                    <input type="radio" class="form-check-input" name="gender" value="female">female
               </div>
               <div class="check-box">
                    <label for="skills[]">Skills</label>
                    <input type="checkbox" name="skills[]" value="java">java
                    <input type="checkbox" name="skills[]" value="js">js
                    <input type="checkbox" name="skills[]" value="php">php
                    <input type="checkbox" name="skills[]" value="css">css
               </div>
               <div class="form-group">
                    <label for="cities">City</label>
                    <select id="cities" name="cities">
                         <option value="madurai">Madhurai</option>
                         <option value="chennai">Chennai</option>
                         <option value="sivakasi">Sivakasi</option>
                         <option value="sivakasi">Theni</option>
                         <option value="sivakasi">Kaasi</option>
                    </select>
               </div>
                    <input class="btn btn-success" type="submit" value="submit" name="submit">
               </form> 
          </div>
     </body> 
</html>