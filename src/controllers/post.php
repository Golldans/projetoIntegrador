<?php


require_once('../config/config.php');

header('Content-Type: application/json');

$texto = $_POST['text'];

$connect = Database::getConnection();

$stmt = $connect->prepare('INSERT INTO post (titulo, texto, link) VALUES ( ?, ?, ?)');
$stmt->bind_param('sss', $texto, $texto, $texto);



if($stmt->execute()){
    echo json_encode('Comentário salvo');
} else {
    echo json_encode('Faiô');
}

?>