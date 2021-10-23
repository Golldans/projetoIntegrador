<?php


require_once('../config/config.php');

header('Content-Type: application/json');


$connect = Database::getConnection();

$stmt = $connect->prepare('SELECT * FROM post');
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