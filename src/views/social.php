<?php
    $var = "Evitando default hacklang";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<header>
  
</header>
<body>
    <div id="atalhos">
        <?php print_r($_SESSION); ?>
    </div>

    <div id="amigos">
        <a href=<?= '../src/controllers/session_destroy.php' ?>><button>Sair</button></a> 
    </div>

    <div id="posts">
    <?php include(VIEW_PATH . '/template/post.php')  ?>
    </div>



</body>
</html>