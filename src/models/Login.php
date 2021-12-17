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

    public function lastSeen($id){
        $volta = User::getOne(['user_id' => $id], 'lastseen');;
        return $volta;
    }

    public function empresa($id){
        $volta = User::getOne(['user_id' => $id], 'empresa');;
        return $volta;
    }


}   
