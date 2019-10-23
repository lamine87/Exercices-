<?php

$noms= "marie de ubeda";

// Tableau numérique
$notes_eleves = [12,20,8,13,17];
//$notes_eleves = array(12,20,8,13,17);

//echo $notes_eleves[0]; // 12

// Tableau associatif
$infos = ['prenom'=>'marie',
          'nom'=>'de ubeda',
          'age'=>36,
          'employeur'=>['societe'=>'Next Formation',
                        'adresse'=>'9 avenue de Paris',
                        'ville'=>'Vincennes',
                        'code_postal'=>94300]
        ];
//echo $infos['prenom']; // marie
//echo $infos['employeur']['societe'] ; // Next Formation

// Debug
//echo "<pre>";
//print_r($infos);
//echo "</pre>";

// afficher les types et length des datas du tableau
//var_dump($infos);

// Foreach
foreach($infos as $k => $info) {
    if(is_array($info)) {
        foreach($info as $i) {
            echo $i;
        }
    } else {
        echo $k."=>".$info.'<br>';
    }
}

