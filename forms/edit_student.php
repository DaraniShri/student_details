<?php
include '../db/class_connection.php';
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
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <style>
          .container{
               margin-top:150px;
               border:2px solid black;
               padding: 60px;
               padding-left:290px;
          }
     </style>
</head>
<body>
<div class="container">
     <div class="row">
          <div class="col-4">
          </div>
          <div class="col-4">
               <form class="form-horizontal" action="../update_student.php"  method="POST">
               <input type="hidden" name="id" value="<?php echo $id; ?>">
               <div class="form-group">
               <label class="control-label col-sm-2" for="user_name">Username:</label>
               <div class="col-sm-4">
                    <input type="text" class="form-control" id="user_name" placeholder="Enter username" name="user_name" value="<?php echo $name;?>">
               </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-4">
                         <input type="email" class="form-control" id="email" placeholder="Enter email" name="e_mail" value="<?php echo $email;?>">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Gender:</label>
                    <div class="col-sm-4">
                         <input type="radio" class="form-check-input" name="gender" value="male" <?php if ($gender != "female") echo "checked"; ?>>male
                         <input type="radio" class="form-check-input" name="gender" <?php if ($gender == "female") echo "checked"; ?>>female
                    </div> 
               </div> 
               <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Skills:</label>
                    <div class="col-sm-4">
                         <input type="checkbox" name="skills[]" value="java" <?php echo (in_array("java",$total_skills) ? 'checked' : ''); ?>>java
                         <input type="checkbox" name="skills[]" value="js" <?php echo (in_array("js",$total_skills) ? 'checked' : ''); ?>>js
                         <input type="checkbox" name="skills[]" value="php" <?php echo (in_array("java",$total_skills) ? 'checked' : ''); ?>>php
                         <input type="checkbox" name="skills[]" value="css" <?php echo (in_array("java",$total_skills) ? 'checked' : ''); ?>>css
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="email">City:</label>
                    <div class="col-sm-4">
                         <select id="cities" name="cities">
                              <option value="madurai" <?=$city == 'madurai' ? ' selected="selected"' : '';?>>Madhurai</option>
                              <option value="chennai" <?=$city == 'chennai' ? ' selected="selected"' : '';?>>Chennai</option>
                              <option value="sivakasi" <?=$city == 'sivakasi' ? ' selected="selected"' : '';?>>Sivakasi</option>
                              <option value="theni" <?=$city == 'theni' ? ' selected="selected"' : '';?>>Theni</option>
                         </select> 
                    </div>
               </div>
               <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                         <input class="btn btn-success" type="submit" value="update" name="submit">
                    </div>
               </div>
               </form>               
          </div> 
          <div class="col-4">
          </div>
     </div>
</div>
</body> 
</html>