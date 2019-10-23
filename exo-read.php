<?php

print_r($_GET);

if(isset($_POST['prenom']) == true) {
    $prenom = trim($_POST['user']);
}else{
    $prenom = null;
}
$login = isset($_POST['login']) ? trim($_POST['login']) : null;
if(empty($login)){
    header('Location: post.php?error=1');


$password = isset($_POST['password']) ? trim($_POST['password']) : null;

    if(empty($password)){
        header('Location: post.php?error=1');



else{
    header('Location: commandez.php?user='.$user);

}