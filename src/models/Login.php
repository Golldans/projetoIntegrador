<?php

require_once(realpath(MODEL_PATH . '/User.php'));

class Login extends Model
{
    public function checkLogin(){
        $user = User::getOne(['username' => $this->username]);
        if($user){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }

        throw new Exception;

    }
}   
