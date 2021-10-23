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

<body id="social-body">
    <div id="atalhos">
        Atalhos
        <a href=<?= '../src/controllers/session_destroy.php' ?>><button>Sair</button></a>
        <button id="teste">aaaa</button>
    </div>

    <section id="social-main">
        <form action="#" method="post" id="to-post">
            <label for="texto">Texto</label>
            <input type="text" name="text" id="text">
            <button>Enviar</button>
        </form>
        <div id="posts">

        </div>
    </section>

    <div id="amigos">
        <h1>Amigos</h1>
    </div>

</body>
<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/social.js"></script>

</html>