<html>
     <head>
          <title>View student</title>
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
                         $class_db=new dbconnection();//class obj
                         $dbstatus=$class_db->getdbconnection();//function call

                         $result=mysqli_query($dbstatus,"select * from registration;");
                         if(!$result){
                              die("Invalid query: ". $dbstatus->connect_error);
                         }
                         while($row=$result->fetch_assoc()){
                              echo "<tr>
                                        <td>" .$row["id"]."</td>
                                        <td>" .$row["username"]."</td>
                                        <td>" .$row["password"]."</td>
                                        <td>" .$row["email"]."</td>
                                        <td> <a href='#'>Edit</a>
                                             <a href='delete_student.php?id=$row[id]'>Delete</a>
                                        </td>
                                   </tr>";
                         }
                         
                    ?>
               </tbody>
          </table>
     </body>
</html>