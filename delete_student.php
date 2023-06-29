<?php
     include 'class/class_student.php';
     if(isset($_GET["id"])){
          $id=$_GET["id"];
          $isDeleted=$student_details->deleteStudent($id);
          if($isDeleted){
               echo "Deleted successfully";
          }
     }
     header("location:/forms/view_student.php");
     exit;
?>