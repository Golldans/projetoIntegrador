<?php

loadModel('User');

session_start();
validarSession();

$exception = null;

if(count($_POST) > 0){

    function validarRegistro(){
        if($_POST['password'] !== $_POST['passwordConfirm'] || $_POST['password'] == ''){
            throw new AppException("Senhas incompatíveis ou vazias");
        }
    
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            throw new AppException("Email inválido");
        }
    }

    try{
        validarRegistro();
        unset($_POST['passwordConfirm']);
        $_POST['user_id'] = 'default';
        $register = new User($_POST);
        $register->password = password_hash($register->password, PASSWORD_DEFAULT);
        $register->insert();
        $_SESSION['user'] = $register->username;
    } catch(AppException $e){
        $exception = $e;
    }

    $_POST = [];
}



loadView('register', $_POST + ['exception' => $exception]);
?>