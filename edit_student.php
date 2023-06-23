<?php
include 'class_connection.php';
$db_connection=$class_db->getdbconnection();
if($_SERVER['REQUEST_METHOD']=='GET'){
     //if GET METHOD shows data
     if(!isset($_GET['id'])){
          header("location:/view_student.php");
          exit;
     }
     $id=$_GET["id"];
     //read the selected student from database
     $sql_query="select * from registration where id=$id";
     $result=$db_connection->query($sql_query);
     $row=$result->fetch_assoc();
     //if nodata redirect to view page
     if(!$row){
          header("location:/view_student.php");
          exit;
     }
     //display the content from database
     $name=$row['username'];
     $password=$row['password'];
     $email=$row['email'];
     $gender=$row['gender'];
     $skills=$row['skills'];
     $total_skills=explode(",",$skills);
}
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
          <form action="update_student.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $id; ?>">
          <table>
               <tr>
                    <td><label for="user_name">Username</label></td>
                    <td><input type="text" id="user_name" name="user_name" value="<?php echo $name; ?>"></td>
               </tr>   
               <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" value="<?php echo $password; ?>"></td>
               </tr>
               <tr>
                    <td><label for="e_mail">E-mail</label></td>
                    <td><input type="email" id="e_mail" name="e_mail" value="<?php echo $email; ?>"></td>
               </tr>
               <tr>
                    <td><label for="gender">Gender</label>
                    <td><input type="radio" name="gender" value="male" <?php if ($gender != "female") echo "checked"; ?>>male
                         <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>female
                    </td>
               </tr>
               <tr>
                    <td><label for="skills[]">Skills</label></td>
                    <td><input type="checkbox" name="skills[]" value="java"
                              <?php
                                   if(in_array("java",$total_skills)){
                                        echo "checked";
                              }?>
                         >java
                         <input type="checkbox" name="skills[]" value="js"
                              <?php
                                   if(in_array("js",$total_skills)){
                                        echo "checked";
                              }?>
                         >js
                         <input type="checkbox" name="skills[]" value="php"
                              <?php
                                   if(in_array("php",$total_skills)){
                                        echo "checked";
                              }?>
                         >php
                         <input type="checkbox" name="skills[]" value="css"
                              <?php
                                   if(in_array("css",$total_skills)){
                                        echo "checked";
                              }?>
                         >css
                    </td>
               </tr> 
               <tr>
                    <td><label for="cities">City</label></td>
                    <td><select id="cities" name="cities" value="<?php echo $city; ?>">
                         <option value="madurai">Madhurai</option>
                         <?php
                              if($row["city"]=='Madurai'){
                                   echo "selected";
                              }
                         ?>
                         <option value="chennai">Chennai</option>
                         <?php
                              if($row["city"]=='Chennai'){
                                   echo "selected";
                              }
                         ?>
                         <option value="sivakasi">Sivakasi</option>
                         <?php
                              if($row["city"]=='Sivakasi'){
                                   echo "selected";
                              }
                         ?>
                         <option value="theni">Theni</option>
                         <?php
                              if($row["city"]=='Theni'){
                                   echo "selected";
                              }
                         ?>
                         </select>
                    </td>
               </tr>  
               <tr>
                    <td colspan="2"><input type="submit" value="update" name="submit"></td>
               </tr>
          </table>
          </form> 
     </div>
</body> 
</html>