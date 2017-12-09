<?php 
session_start();

//if already logged in
if(isset($_SESSION['loggedIn'])) {
    header('Location: ../index.php');
    exit();
}

if(isset($_POST['login'])){

    // DB connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evenTech_dbExam";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



    $sEmail = $_POST['email'];
    $sPassword = md5($_POST['password']);


    $data = $conn->prepare("SELECT id FROM admins WHERE email = :email AND password = :password ");
    $data->bindParam(':email', $sEmail);
    $data->bindParam(':password', $sPassword);
    $data->execute();
    // $data->setFetchMode(PDO::FETCH_OBJ);
    $result = $data->fetchAll();
    
    // print_r($result);
    if(count($result) > 0){
        $_SESSION["loggedIn"] = '1';
        $_SESSION["sEmail"] = $sEmail;
        $_SESSION["sPassword"] = $sPassword;

        exit("success");
    } else {
        exit("The email or password you have entered is incorrect! Please try again!");
    }

    
}

?>