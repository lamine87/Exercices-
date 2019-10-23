<?php

$emails = ['toto@gmail.com',
           'titi@gmail.com',
           'tata@gmail.com',
           'fred@yahoo.fr',
           'marie@yahoo.fr',
           'ted@free.fr',
           'bibi@free.fr',
            'bobo@msn.com',
           'bibi@wanadoo.fr',
           'bob@yahoo.fr',
           'bibi@yahoo.fr',
    ];
// A partir de la liste d'emails ci-dessus, vous devez afficher un tableau Html de statistiques.
// Les colonnes de ce tableau sont FAI,domain,Total et pourcentage

$domaines = [];
foreach($emails as $email) {
   $email_decompose = explode('@',$email);
    $domaines[] =  $email_decompose[1];
}
$occurrences_domaine = array_count_values($domaines);

$stats = [];
$total_emails = count($emails);
foreach($occurrences_domaine as $occurence => $total ) {
    $fai = explode('.',$occurence);
//    echo $fai[0]."<br>";
    $stats[] = [
        'fai'=>ucfirst($fai[0]),
        'domaine'=>$occurence,
        'total'=>$total,
        'pourcentage'=> $total / $total_emails * 100
    ];
}

//print_r($stats);
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
        table {
            border-collapse: collapse;
        }
        table,td,th {
            padding: 5px;
            border: 1px solid #000000;
        }

    </style>
</head>
<body>
<table>
<!--    thead>tr>th*4-->
    <thead>
    <tr>
        <th>FAI</th>
        <th>Domaine</th>
        <th>Total</th>
        <th>Pourcentage</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($stats as $stat) : ?>
        <tr>
            <td><?= $stat['fai'] ?></td>
            <td><?= $stat['domaine'] ?></td>
            <td><?= $stat['total']?></td>
            <td><?= number_format($stat['pourcentage'],2)?> %</td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
</body>
</html>