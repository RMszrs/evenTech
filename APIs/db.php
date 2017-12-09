<?php 


// DB connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evenTech_dbExam";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);