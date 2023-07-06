<html>
<head>
     <title>View student Details</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style>
          .container .log a{
               position:absolute;
               top:0;
               right:0;
          }
     </style>
</head>
<body>
<?php
     require '..\common\header.html';
     session_start();
     if(!isset($_SESSION['username']))
     {
          header("location: login_student.php");
     }
?>
<div class="container">
     <div class="log">
          <a href="../logout_student.php" class="btn btn-primary">Log out</a>
     </div>
     <div class="row">
          <div class="col-4">
          </div>
          <div class="col-4">
               <table class="table">
                    <thead>
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>E-mail</th>
                              <th>Skills</th>
                              <th>City</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                    <?php
                         include '../db/class_connection.php';                     
                         $db_connection=$class_db->getdbconnection();
                         $result=mysqli_query($db_connection,"select * from registration;");
                         if(!$result){
                              die("Invalid query: ". $db_connection->connect_error);
                         }
                         if(isset($_SESSION['username'])){  
                              if($_SESSION['username']=="admin" && $_SESSION['isLogin']==true){                                      
                                   while($row=$result->fetch_assoc()){                                                                                     
                                             echo "<tr>
                                                       <td>" .$row["id"]."</td>
                                                       <td>" .$row["username"]."</td>
                                                       <td>" .$row["email"]."</td>
                                                       <td>" .$row["skills"]."</td>
                                                       <td>" .$row["city"]."</td>
                                                       <td> <a class='btn btn-primary' href='edit_student.php?id=$row[id]' role='button'>Edit</a>
                                                       <button type='button' name='del_button' id='del_button' data-student-Id=".$row['id'].">Delete</button>
                                                       </td>
                                                  </tr>";                                              
                                   }  
                              }
                              else{
                                   while($row=$result->fetch_assoc()){
                                        if($_SESSION['username']==$row['username'] && $_SESSION['isLogin']==true){                                                                                   
                                             echo "<tr>
                                                       <td>" .$row["id"].      "</td>
                                                       <td>" .$row["username"]."</td>
                                                       <td>" .$row["email"].   "</td>
                                                       <td>" .$row["skills"].  "</td>
                                                       <td>" .$row["city"].    "</td>
                                                       <td> <a class='btn btn-primary' href='edit_student.php?id=$row[id]' role='button'>Edit</a>
                                                       <button type='button' name='del_button' id='del_button' data-student-Id=".$row['id'].">Delete</button>
                                                       </td>
                                                  </tr>"; 
                                        }                                             
                                   }  
                              }
                         }                            
                    ?>
                    </tbody>
               </table>
<script type="text/javascript">                         
$(document).ready(function(){
     $('button[name="del_button"]').click(function(){
          $.ajax({
               url: '../delete_student.php',
               type: 'POST',
               data: {
                    student_id:$(this).attr('data-student-Id'),
               },
               success:function(response){
                    var jsonData = JSON.parse(response);
                    if(jsonData.success=="1"){
                         alert(jsonData.message);
                    }
                    else{
                         alert(jsonData.message);
                    }
               }
          });
     });                           
});
</script>
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