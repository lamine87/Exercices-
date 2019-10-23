<?php
$error = isset($_GET['error']) ? $_GET['error'] : false;
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
            background: #ff030d;

        }
      </style

</head>
<body>
<?php if($error ==1) :?>
<div class="error">
    Le champ nom est obligatoire !
</div>
<?php endif ?>

<?php if($error ==2) :?>
    <div class="error">
       Tu n'as pas l'âge nécessaire!
    </div>
<?php endif ?>


<form action="get-read.php" method= "get">

    <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom">
    </div>

    <div>
        <label for="Nom">Nom</label>
        <input type="text" name="nom" id="nom">
    </div>

    <div>
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
    </div>

    <input type="submit" value="S'enregistrer">
</form>
</body>
</html>