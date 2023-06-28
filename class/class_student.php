<?php
     include_once $_SERVER['DOCUMENT_ROOT']."/db/class_connection.php";
     class student{
          public $db_connection;
          public function __construct(){
               $class_test = new dbconnection();
               $this->db_connection=$class_test->getdbconnection();
               if($this->db_connection){
                    echo "called from __construct if";
               }
               else{
                    echo "called from __construct else";

               }
          }
          public function insertStudent($name,$hash_password,$email,$gender,$skill_array,$city)
          {
                
               $insert_query=mysqli_query($this->db_connection,"insert into registration".
               "(username,password,email,gender,skills,city) values ".
               "('$name','$hash_password','$email','$gender','$skill_array','$city');");
               if($insert_query){
                    echo "Inserted successfully";
               }
          }
     }
     global $student_details;
     $student_details=new student();
?>