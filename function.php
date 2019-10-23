<?php
/**
*@param  array $messages
    *@return void
 * */
function setFlash(array $messages) :void
{
//vérifier si la session existe
    if(!isset($_SESSION)){

        session_start();
    }
  // Stockage dans la session du tableau contenant les messages de l'utilisateur
    $_SESSION['flash'] = ['messages' => $messages];
}

/**
 * Afficher des messages flash
 */
    function getFlash() :void{

        //la session contient des messages
        if(isset($_SESSION['flash']['messages']))  {
            foreach ($_SESSION['flash']['messages'] as $message) {
            $color = $message['type'];
            $message = $message['message'];

            echo "<div class='$color'>$message</div>";
        }
            //echo
        //suppression du /des messages de la session
        unset($_SESSION['flash']['messages']);
      }
    }