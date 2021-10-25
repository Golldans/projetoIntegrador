<?php

loadModel('User');

session_start();
redirect();

$exception = null;

if(count($_POST) > 0){

    function validarRegistro(){
        if($_POST['password'] !== $_POST['passwordConfirm'] || $_POST['password'] == ''){
            throw new AppException("Senhas incompatíveis ou vazias");
        }
    
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            throw new AppException("Email inválido");
        }

        if(User::getOne(['email' => $_POST['email']])){
            throw new AppException('Email já cadastrado');
        }

        if(strlen($_POST['username']) <= 4 && mb_check_encoding($_POST['username'], 'UTF-8')){
            throw new AppException('Nome de usuário inválido');
        }
    }

    try{
        validarRegistro();
        unset($_POST['passwordConfirm']);
        $_POST['user_id'] = 'default';
        $register = new User($_POST);
        $register->password = password_hash($register->password, PASSWORD_DEFAULT);
        $register->insert_user();
        $register->password = null;
        $register->user_id = $register->addUserId();
        $_SESSION['login'] = serialize($register);
        header("Location: index.php");
    } catch(AppException $e){
        $exception = $e;
    }

    $_POST = [];
}



loadView('register', $_POST + ['exception' => $exception]);
?>