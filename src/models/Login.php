<?php

loadModel('User');

class Login extends Model
{
    public function checkLogin(){
        $user = User::getOne(['username' => $this->username]);
        if($user){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }

        throw new AppException('Usuário ou senha inválidos.');

    }
}   
