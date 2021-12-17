<?php


require_once('../config/config.php');
loadModel('Login');
session_start();
header('Content-Type: application/json');


    $var = unserialize($_SESSION['login']);
    $user = intval($var->user_id);

    $texto = $_POST['text'];
    $titulo = $_POST['title'];
    $link = $_POST['link'];
    
    
    $connect = Database::getConnection();
    Database::executeSQL("UPDATE users SET lastseen = NOW() WHERE user_id = $user;");
    $stmt = $connect->prepare('INSERT INTO post (titulo, texto, link, autor) VALUES ( ?, ?, ?, ?)');
    $stmt->bind_param('sssi', $titulo, $texto, $link, $user);
    
    $stmt->execute();

    echo json_encode("Fim");
?>