<?php
session_start();
require 'function.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {
            color:red;
            font-weight: bold;
        }
        .success{
            color: green;
            font-weight: bold;
        }
    </style>

</head>
<body>
   <?php getFlash(); ?>
<form action="session.php" method= "POST">
    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>

    <div>
        <label for="Nom">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit">
</form>


</body>
</html>