<?php
loadModel('Login');

session_start();

$exception = null;

if(count($_POST) > 0){

    $login = new Login($_POST);
    try{
        $user = $login->checkLogin();
        $login->user_id = $login->addUserId();
        $login->password = null;
        $login->last = $login->lastSeen($login->user_id)->lastseen;
        $login->empresa = $login->empresa($login->user_id)->empresa;
        $_SESSION['login'] = serialize($login);
        header("Location: index.php");
    } catch (AppException $e){
        $exception = $e;
    }
}

loadView('Login', $_POST + ['exception' => $exception]);

?>