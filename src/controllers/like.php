<?php

require_once('../config/config.php');

header('Content-Type: application/json');

$like = $_POST['id'];

$connect = Database::getConnection();

$stmt = $connect->prepare('UPDATE post SET curtidas = curtidas + 1 WHERE post_id = ?');
$stmt->bind_param('i', $like);

if($stmt->execute()){
    echo json_encode('Deu certo');
} else{
    echo json_encode('vish');
}


?>