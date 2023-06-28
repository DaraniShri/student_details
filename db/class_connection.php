<?php
     class dbconnection{
          public $servername;
          public $username;
          public $password;
          public $database;
          public function getdbconnection(){
               $this->servername="localhost";
               $this->username="root";
               $this->password="";
               $this->database="student";
               $connection=mysqli_connect($this->servername,$this->username,$this->password,$this->database);
               return $connection;
          }
     }
     global $class_db;
     $class_db=new dbconnection();
?>