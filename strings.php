<?php
require 'nombres.php';
$prenom = strlen("marie");
$nom = "de ubeda";

// Concaténation
//echo $prenom." ".$nom;
//echo "$prenom $nom";
//echo '$prenom $nom';
//echo "<h1>Bonjour $prenom</h1>";
$total = somme(10,4);
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
<h1>Bonjour <?php echo "$prenom $nom"?></h1>
<ul>
    <li>un item de la liste</li>
    <li>un item de la liste</li>
    <li>un item de la liste</li>
    <li>un item de la liste</li>
    <li>un item de la liste</li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Accusamus accusantium architecto blanditiis,
    commodi deserunt eaque eligendi et fuga laudantium minus,
    perspiciatis praesentium quidem repellat sed ut velit vitae.
    Nesciunt, qui.</p>
</body>
</html>

