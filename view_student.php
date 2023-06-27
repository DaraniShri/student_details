<html>
     <head>
          <title>View student Details</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <style>
               .container{
                    margin-top:100px;
               }
          </style>
     </head>
     <body>
          <div class="container">
               <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-8">
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
                                        include 'db/class_connection.php';
                                        //class obj
                                        $db_connection=$class_db->getdbconnection();//function call

                                        $result=mysqli_query($db_connection,"select * from registration;");
                                        if(!$result){
                                             die("Invalid query: ". $db_connection->connect_error);
                                        }
                                        while($row=$result->fetch_assoc()){
                                             echo "<tr>
                                                       <td>" .$row["id"]."</td>
                                                       <td>" .$row["username"]."</td>
                                                       <td>" .$row["email"]."</td>
                                                       <td>" .$row["skills"]."</td>
                                                       <td>" .$row["city"]."</td>
                                                       <td> <a class='btn btn-primary' href='./forms/edit_student.php?id=$row[id]' role='button'>Edit</a>
                                                            <a class='btn btn-danger' href='delete_student.php?id=$row[id]' role='button'>Delete</a>
                                                       </td>
                                                  </tr>";
                                        } 
                                   ?>
                              </tbody>
                         </table>
                    </div>
                    <div class="col-2">
                    </div>
               </div>
          </div>
     </body>
</html>