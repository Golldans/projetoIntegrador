<?php

function validarSession(){
    $user = $_SESSION['login'];
    if(isset($user)){
        header("Location: index.php");
    }
}

?>