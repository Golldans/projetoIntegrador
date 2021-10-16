<?php
loadModel('Login');

session_start();

$exception = null;

if(count($_POST) > 0){

    $login = new Login($_POST);
    try{
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: social.php");
    } catch (AppException $e){
        $exception = $e;
    }
}



loadView('Login', $_POST + ['exception' => $exception]);

?>