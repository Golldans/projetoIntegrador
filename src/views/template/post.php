<?php

require_once(MODEL_PATH . '/Social.php');

    $posts = new Dados(array());

    $resultado = $posts->generatePost();

    foreach($resultado as $result){
        echo "<div class='post'>{$result->titulo}</div>";
    }

?>