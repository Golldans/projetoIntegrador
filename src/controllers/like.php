<?php


session_start();
require_once('../config/config.php');
require_once(MODEL_PATH."/Login.php");
loadModel('Login');
header('Content-Type: application/json');


$var = unserialize($_SESSION['login']);
$post = $_POST['id'];
$user = $var->user_id;




$connect = Database::getConnection();

$stmtcondit = $connect->prepare('SELECT liked FROM likes WHERE post = ? AND user = ?');
$stmtcondit->bind_param('ii', $post, $user);
$stmtcondit->execute();
$result = $stmtcondit->get_result();
$dado = $result->fetch_assoc();

if(is_null($dado)){
    $newLike = 1;
    $stmtinput = $connect->prepare('INSERT INTO likes (post, user, liked) VALUES (?, ?, ?)');
    $stmtinput->bind_param('iii', $post, $user, $newLike);
    $stmtinput->execute();
    $stmtlike = $connect->prepare('UPDATE post SET curtidas = curtidas + 1 WHERE post_id = ?');
    $stmtlike->bind_param('i', $post);
    $stmtlike->execute();
    echo json_encode(0); die;
} 

if($dado['liked'] == 0){
    $stmtlike = $connect->prepare('UPDATE post SET curtidas = curtidas + 1 WHERE post_id = ?');
    $stmtbool = $connect->prepare('UPDATE likes SET liked = 1 WHERE post = ? AND user = ?');

} else {
    $stmtlike = $connect->prepare('UPDATE post SET curtidas = curtidas - 1 WHERE post_id = ?');
    $stmtbool = $connect->prepare('UPDATE likes SET liked = 0 WHERE post = ? AND user = ?');
}

$stmtbool->bind_param('ii', $post, $user);
$stmtlike->bind_param('i', $post);


if($stmtlike->execute()){
    $stmtbool->execute();
    echo json_encode($dado['liked']);
} else{
    echo json_encode('vish');
}


?>