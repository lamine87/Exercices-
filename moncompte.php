<?php
//Creation / Recuperation de session
     session_start();
//print_r($_session);
if(!isset($_SESSION['is_logged']) || $_SESSION['is_logged'] != true) {
     header( 'Location: login.php');
      exit();

}else {
     $login = isset($_SESSION['login']) ? $_SESSION['login'] :null;

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Bienvenue<?=$login ?></h1>
<h2>Voici votre espace client </h2>

</body>
</html>