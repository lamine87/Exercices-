<?php
require 'function.php';
$message=[];
//Recuperer les donnnées du formulaire
$login = isset($_POST['login']) ? trim($_POST['login']) : null;
$password = isset($_POST['password']) ? trim($_POST['password']) : null;

//si login et mot de passe ok
//> Redirection vers mon compte.php
// Avec Démarrage session

if(!empty($login) && $password =="toto2000") {

    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['is_logged'] = true;
// print_r($_SESSION)
    header('Location: moncompte.php');
     exit();
 
 }else {
       $message[] = ['type' =>'error','message'=>'tous les champs sont obligatoires'];
       setFlash($message);
       //die(print_r($_SESSION));
      header('Location: login.php');
      exit();
}









