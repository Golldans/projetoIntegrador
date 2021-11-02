<?php


require_once('../config/config.php');

header('Content-Type: application/json');

    $texto = $_POST['text'];
    $titulo = $_POST['title'];
    $link = $_POST['link'];
    
    
    $connect = Database::getConnection();
    
    $stmt = $connect->prepare('INSERT INTO post (titulo, texto, link) VALUES ( ?, ?, ?)');
    $stmt->bind_param('sss', $titulo, $texto, $link);
    
    $stmt->execute();

    echo json_encode("Fim");
?>