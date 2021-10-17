<?php

    

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
<body id="body-login">
    <div id="login">
        <h1>Bem vindo, visitante</h1>
        <form action="#" method="post">
            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" placeholder="Usuário" value="<?= isset($username) ? $username : ''?>">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Senha">
            <button>Entrar</button>
        </form>
        <a href="register.php">Não possui uma conta?</a>
        <a href="#">Esqueceu sua senha?</a>
        <?php include(VIEW_PATH . '/template/messages.php'); ?>
    </div>

</body>
</html>