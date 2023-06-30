<html>
     <head>
          <title>View student Details</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <style>
               .container{
                    margin-top:50px;
               }
               .row{
                    border:2px solid black;
                    padding:30px;
               }
               .container .headers{
                    margin-bottom:20px;
                    border:2px solid;
                    box-shadow:5px 10px #888888;
                    position:relative;
               }
               .container .headers header{
                    font-family:cursive;
                    font-weight:bold;
                    font-size:60px;
                    text-align:center;
               }
               .container .headers a{
                    position:absolute;
                    top:0;
                    right:0;
               }
          </style>
     </head>
     <body>
     <?php
          session_start();
          if(!isset($_SESSION['username'])){
               header("location: login_student.php");
          }
     ?>
     <div class="container">
          <div class="headers">
               <header>Student Details</header>
               <a href="../logout_student.php" class="btn btn-primary">Log out</a>
          </div>
          <div class="menu">
               <?php
                    if(isset($_SESSION['username'])){
                         if($_SESSION['username']=="admin"){
                              echo "<a href='create_student.php' class='btn btn-success'>Add</a>";
                         }
                    }
               ?>
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
                                        if($_SESSION['username']=="admin"){                                      
                                             while($row=$result->fetch_assoc()){                                                                                     
                                                       echo "<tr>
                                                                 <td>" .$row["id"]."</td>
                                                                 <td>" .$row["username"]."</td>
                                                                 <td>" .$row["email"]."</td>
                                                                 <td>" .$row["skills"]."</td>
                                                                 <td>" .$row["city"]."</td>
                                                                 <td> <a class='btn btn-primary' href='edit_student.php?id=$row[id]' role='button'>Edit</a>
                                                                      <a class='btn btn-danger' href='../delete_student.php?id=$row[id]' role='button'>Delete</a>
                                                                 </td>
                                                            </tr>";                                              
                                             }  
                                        }
                                        else{
                                             while($row=$result->fetch_assoc()){
                                                  if($_SESSION['username']==$row['username']){                                                                                   
                                                       echo "<tr>
                                                                 <td>" .$row["id"]."</td>
                                                                 <td>" .$row["username"]."</td>
                                                                 <td>" .$row["email"]."</td>
                                                                 <td>" .$row["skills"]."</td>
                                                                 <td>" .$row["city"]."</td>
                                                                 <td> <a class='btn btn-primary' href='edit_student.php?id=$row[id]' role='button'>Edit</a>
                                                                      <a class='btn btn-danger' href='../delete_student.php?id=$row[id]' role='button'>Delete</a>
                                                                 </td>
                                                            </tr>"; 
                                                  }                                             
                                             }  
                                        }

                                   }                            
                              ?>
                         </tbody>
                    </table>
               </div>
               <div class="col-4">
               </div>
          </div>
          <div class="footers">
          </div>
     </div>
     </body>
</html>