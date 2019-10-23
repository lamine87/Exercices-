<?php
//
//print_r($_POST);


if(isset($_POST['login']) == true) {
        $login = trim($_POST['login']);
}else{
    $login = null;
}
 $password= isset($_POST['password']) ? trim($_POST['password']) : null;


if(empty($login)){
    header('Location: post.php?error=1');
}

else if($password !="total2000"){
    header('Location: post.php?error=2');
}

else{
    header('Location: about.php?login='.$login);

}