<?php

function validarSession(){

    if(!isset($_SESSION['login'])){
        header("Location: index.php");
    }
}

function redirect(){

    if(isset($_SESSION['login'])){
        header("Location: index.php");
    }
}

?>