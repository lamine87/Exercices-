<?php
$error = isset($_POST['error']) ? $_POST['error'] : false;

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
<?php if($error ==1) :?>
    <div class="error">
         Tous les champs sont Obligatoires!
    </div>
<?php endif ?>

<?php if($error ==2) :?>
    <div class="error">
        Champs incorrect
    </div>
<?php endif ?>

<form action="exo-read.php" method= "post">

    <div>
        <label for="Nom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
    </div>

    <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
    </div>

    <div>
        <label for="Nom">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="OK">
</form>

<ul id="menu-deroulant">




</body>
</html>
