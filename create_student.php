<?php
     include('store_student.php');
?>
<html>
     <head>
          <title>Student Details</title>
          <style>
               .container{
                    display:flex;
                    justify-content: center;
               }
               .container table{
                    border:1px solid black;
                    border-collapse:collapse;
                    background-color:aqua;
               }
          </style>
     </head>
     <body>
          <div class="container">
               <form action="store_student.php" method="POST">
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
                              <td><label for="gender">Gender</label>
                              <td><input type="radio" name="gender" value="male">male
                                   <input type="radio" name="gender" value="female">female
                              </td>
                         </tr>
                         <tr>
                              <td><label for="skills[]">Skills</label></td>
                              <td><input type="checkbox" name="skills[]" value="java">java
                                   <input type="checkbox" name="skills[]" value="js">js
                                   <input type="checkbox" name="skills[]" value="php">php
                                   <input type="checkbox" name="skills[]" value="css">css
                              </td>
                         </tr>  
                         <tr>
                              <td><label for="cities">City</label></td>
                              <td><select id="cities" name="cities">
                                   <option value="madurai">Madhurai</option>
                                   <option value="chennai">Chennai</option>
                                   <option value="sivakasi">Sivakasi</option>
                                   <option value="sivakasi">Theni</option>
                                   <option value="sivakasi">Kaasi</option>
                                   </select>
                              </td>
                         </tr>    
                         <tr>
                              <td colspan="2"><input type="submit" value="submit" name="submit"></td>
                         </tr>
                    </table>
               </form> 
          </div>
     </body> 
</html>