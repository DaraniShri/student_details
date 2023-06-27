<html>
     <head>
          <title>Student login</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <style>
               .container{
                    margin-top:200px;
                    border:1px solid black;
               }
          </style>
     </head>
<body>
     <div class="container">
          <div class="row">
               <div class="col-4">
               </div>
               <div class="col-4">
               <form class="form-horizontal" action="validate_student.php" method="POST">
               <div class="form-group">
                    <label class="control-label col-sm-2" for="user_name">Username:</label>
                    <div class="col-sm-4">
                         <input type="text" class="form-control" id="user_name" placeholder="Enter username" name="user_name">
                    </div>
               </div>
               <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password:</label>
                    <div class="col-sm-4">          
                         <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
               </div>
               <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-4">
                         <input class="btn btn-success" type="submit" value="submit" name="submit">
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