<html>
     <head>
          <title>View student Details</title>
          <style>
               body{
                    margin-left:500px;
               }
               .table{
                    border:1px solid black;
                    padding:20px;
               }
               .table thead{
                    text-decoration-line:underline;
               }
          </style>
     </head>
     <body>
          <table class="table">
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Password</th>
                         <th>E-mail</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         include 'class_connection.php';
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
                                        <td>" .$row["password"]."</td>
                                        <td>" .$row["email"]."</td>
                                        <td> <a href='edit_student.php?id=$row[id]'>Edit</a>
                                             <a href='delete_student.php?id=$row[id]'>Delete</a>
                                        </td>
                                   </tr>";
                         } 
                    ?>
               </tbody>
          </table>
     </body>
</html>