<?php

print_r($_GET);

if(isset($_GET['prenom']) == true) {
    $prenom = trim($_GET['prenom']);
}else{
    $prenom = null;
}

//echo $prenom;
//Opérateur ternaire

//$nom = question ? si c'est vrai : si c'est faux;
$nom = isset($_GET['nom']) ? trim($_GET['nom']) : null;
$age = isset($_GET['age']) ? trim($_GET['age']) : null;
//Si le champ nom n'est pas rempli >redirection vers
// page get.php avec un message d'erreur

if(empty($nom)){
    header('Location: get.php?error=1');
}

// Si l'age inf<18, impossible d'acceder a la page bienvenue.php




//Donc redirection vers la page get.php avec un autre message d'erreur

else if($age<18){
    header('location: get.php?error=2');
}

//Si tout est ok > redirection vers bienvenue.php avec affichage de la
//  phrase <h1> Bienvenue $prenom <h1>

else{
    header('Location: bienvenue.php?prenom='.$prenom);
    //    //(ou) header("Location: bienvenue.php?prenom=$prenom")
}