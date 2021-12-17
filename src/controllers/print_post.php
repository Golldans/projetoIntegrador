<?php


require_once('../config/config.php');
loadModel('Login');
session_start();
header('Content-Type: application/json');


    $var = unserialize($_SESSION['login']);
    $user = intval($var->user_id);



$connect = Database::getConnection();

$stmt = $connect->prepare('SELECT titulo, post_id, texto, link, curtidas, user_id,username FROM post
INNER JOIN users ON user_id = autor');
$stmt->execute();

$result = $stmt->get_result();

$output = [];

while($data = $result->fetch_assoc()){
    $output[]= $data;
}

if($stmt->execute()){
    echo json_encode($output);
} else {
    echo json_encode('Faiô');
}

?>