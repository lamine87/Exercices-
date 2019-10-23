<?php
$users = [
    ['id'=>1,'prenom'=>"Robert",'login'=>'bob','password'=>'bob2000','age'=>42,'fonction'=>'coursier'],
    ['id'=>2,'prenom'=>"Brigitte",'login'=>'bibi','password'=>'bibi2000','age'=>27,'fonction'=>'boss'],
    ['id'=>3,'prenom'=>"Lucien",'login'=>'lulu','password'=>'lulu2000','age'=>24,'fonction'=>'coursier'],
];

foreach($occurrences_domaine as $occurence => $total ) {
    $fai = explode('.',$occurence);
//    echo $fai[0]."<br>";
    $stats[] = [
        'fai'=>ucfirst($fai[0]),
        'domaine'=>$occurence,
        'total'=>$total,
        'pourcentage'=> $total / $total_emails * 100
    ];



foreach($users as $user) {

}
if($user['login']==$login )
    $user['password']

$commandes = [
    ['id'=>245,'total_ttc'=>27,'restaurant'=>'la plancha',
        'adresse'=>['rue'=>'10 rue de Paris',
            'ville'=>'Vincennes',
            'code_postal'=>94300],
        'coursier_id'=>1
    ],
    ['id'=>249,'total_ttc'=>29,'restaurant'=>'Boulangerie trop cool',
        'adresse'=>['rue'=>'8 rue de Paris',
            'ville'=>'Vincennes',
            'code_postal'=>94300],
        'coursier_id'=>1
    ],
    ['id'=>250,'total_ttc'=>24,'restaurant'=>'Pizzeria trop cool',
        'adresse'=>['rue'=>'6 rue de Paris',
            'ville'=>'Vincennes',
            'code_postal'=>94300],
        'coursier_id'=>3
    ],
];

//print_r($users);

// Faire un système de consultation de commande.
// Si on est coursier, on ne voit que ses propres commandes
// Si on est le boss on voit toutes les commandes

?>