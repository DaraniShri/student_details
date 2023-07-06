<?php
     include 'db/class_connection.php';
     global $class_db;
     $db_connection=$class_db->getdbconnection();
     $student_id=$_POST['student_id'];
     mysqli_query($db_connection,"DELETE from registration WHERE id=$student_id");
     if(mysqli_affected_rows($db_connection)==1){ 
          $responseArray=array('success' => 1,'message'=>"Student ".$student_id." deleted successfully"); 
          echo json_encode($responseArray);
     }
     else{
          $responseArray=array('success' => 0,'message'=>"Student ".$student_id+" cannot be deleted"); 
          echo json_encode($responseArray);
     }
   
?>