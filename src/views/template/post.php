<?php

require_once(MODEL_PATH . '/Social.php');

    $posts = new Dados(array());

    foreach($resultado as $result){
        echo "<div class='post'>
        <div class='title'>
        {$result->titulo}
        </div>
        {$result->texto} <br>
        <a href='https://{$result->link}'>Link</a><br>
        </div>";
    }

?>
