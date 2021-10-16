<?php

function validarSession(){
    $user = $_SESSION['user'];
    if(!isset($user)){
        header("Location: index.php");
    }
}

?>