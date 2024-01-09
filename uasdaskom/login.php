<?php

    session_start();
    if (isset($_GET["email"]) && isset($_GET["password"])) {
        $_SESSION["email"] =  $_GET["email"];
        $_SESSION["password"] = $_GET["password"];
        header("Location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/login.css">

    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="title">
                <h1>Outer</h1>
                <h1 style="color: rgb(42, 97, 208);">Space</h1>
                <h1 style="font-size: smaller;">.com</h1>
            </div>
            <div class="form-wrapper"> 
                <form action="#" method="GET">
                    <input type="email" name="email" placeholder="Email"></br>
                    <input type="password" name="password" placeholder="Password"></br>
                    <input class="submit-btn" type="submit" value="Log In">
                </form>
                
            </div>
            

        </div>
    </div>

    


</body>
</html>