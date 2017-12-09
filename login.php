<?php 
session_start();
//if already logged in
if(isset($_SESSION['loggedIn'])) {
    header('Location: ./index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EvenTech - Admin login</title>

    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <form method="post" action="APIs/login.api.php">
       <input type="text" id="email" placeholder="Email...">
       <input type="password" id="password" placeholder="Password..."><br />
       <input type="button" value="Log In" id="login">
       <p id="loginResponse"></p>
    </form>



    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="scripts/login.js"></script>
</body>
</html>