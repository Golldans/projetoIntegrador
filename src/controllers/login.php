<?php

loadModel('Login');

if(count($_POST) > 0){
    $login = new Login($_POST);
    try{
        $user = $login->checkLogin();
        echo "Usuário {$user->username} logado";
    } catch (AppException $e){
        echo $e->getMessage();
    }
}

loadView('Login', $_POST);

?>