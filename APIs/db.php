<?php 


// DB connection 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "evenTech_dbExam";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);