<?php


loadModel('Social');
session_start();
validarSession();

loadModel('Login');
isset($_SESSION['login']) ? $usuario = unserialize($_SESSION['login']) : '';
loadView('social', ["Usuario" => $usuario->username, $usuario->user_id, $usuario->empresa]);

?>