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
     $city=$row['city'];
     $total_skills=explode(",",$skills);
}
?>
<html>
<head>
     <title>Student Details</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
     <div class="container"> 
          <form action="update_student.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $id; ?>">
               <label for="user_name">Username</label>
               <input type="text" id="user_name" name="user_name" value="<?php echo $name; ?>"></td>
               <label for="password">Password</label></td>
               <input type="password" id="password" name="password" value="<?php echo $password; ?>"></td>
               <label for="e_mail">E-mail</label></td>
               <input type="email" id="e_mail" name="e_mail" value="<?php echo $email; ?>"></td>
               <label for="gender">Gender</label>
               <input type="radio" name="gender" value="male" <?php if ($gender != "female") echo "checked"; ?>>male
               <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>female
               <label for="skills[]">Skills</label></td>
               <input type="checkbox" name="skills[]" value="java" <?php echo (in_array("java",$total_skills) ? 'checked' : ''); ?>>java
               <input type="checkbox" name="skills[]" value="js" <?php echo (in_array("js",$total_skills) ? 'checked' : ''); ?>>js
               <input type="checkbox" name="skills[]" value="php" <?php echo (in_array("java",$total_skills) ? 'checked' : ''); ?>>php
               <input type="checkbox" name="skills[]" value="css" <?php echo (in_array("java",$total_skills) ? 'checked' : ''); ?>>css
               <label for="cities">City</label></td>
               <select id="cities" name="cities" value="<?php echo $city; ?>">
                    <option value="madurai" <?=$city == 'madurai' ? ' selected="selected"' : '';?>>Madhurai</option>
                    <option value="chennai" <?=$city == 'chennai' ? ' selected="selected"' : '';?>>Chennai</option>
                    <option value="sivakasi" <?=$city == 'sivakasi' ? ' selected="selected"' : '';?>>Sivakasi</option>
                    <option value="theni" <?=$city == 'theni' ? ' selected="selected"' : '';?>>Theni</option>
                    </select>
               <input class="btn btn-success" type="submit" value="update" name="submit"></td>
          </form> 
     </div>
</body> 
</html>