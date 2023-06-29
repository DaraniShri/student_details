<?php
     include './class/class_student.php';
     if(isset($_POST["id"])){
          $id=$_POST["id"];
          $name=$_POST["user_name"];
          $email=$_POST["e_mail"];
          $gender=$_POST["gender"];
          $skills=$_POST["skills"];
          $skills_update=implode(",",$skills);
          $city=$_POST["cities"];
          $isUpdated=$student_details->updateStudent($id,$name,$email,$gender,$skills_update,$city); 
          if($isUpdated){
               echo "Updated successfully";
          }
     }
     header("location:/forms/view_student.php");
     exit;
?>