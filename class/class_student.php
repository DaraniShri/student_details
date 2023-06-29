<?php
     include_once $_SERVER['DOCUMENT_ROOT']."/db/class_connection.php";
     class student{
          public $db_connection;
          public function __construct(){
               $class_test = new dbconnection();
               $this->db_connection=$class_test->getdbconnection();
               if(!$this->db_connection){
                    echo "Something went wrong check your connection...";
               }
          }
          public function insertStudent($name,$hash_password,$email,$gender,$skill_array,$city)
          {
               $insert_query=mysqli_query($this->db_connection,"insert into registration".
               "(username,password,email,gender,skills,city) values ".
               "('$name','$hash_password','$email','$gender','$skill_array','$city');");
               return $insert_query;
          }

          public function updateStudent($id,$name,$email,$gender,$skills_update,$city)
          {
               $update_query=mysqli_query($this->db_connection,"update registration set username='$name', email='$email', skills='$skills_update', city='$city' where id=$id");
               return $update_query;
          }

          public function deleteStudent($id)
          {
               $delete_query=mysqli_query($this->db_connection,"delete from registration where id=$id");
               return $delete_query;
          }
     }
     global $student_details;
     $student_details=new student();
?>