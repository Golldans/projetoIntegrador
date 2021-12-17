<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="./assets/img/icon.png">
    <title>Login</title>
</head>
<body id="body-login">
    <div id="login">
        <h1>Deseja fazer parte?</h1>
        <form action="#" method="post" autocomplete="off">
            <label for="username">Nome de usuário</label>
            <input type="text" name="username" id="username" placeholder="Usuário">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="empresa">Instituição?</label>
            <input type="checkbox" name="empresa" id="empresa">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Senha">
            <label for="passwordConfirm">Confirme sua senha</label>
            <input type="password" name="passwordConfirm" id="password" placeholder="Sua senha novamente">
            <button>Entrar</button>
        </form>
        <?php include(VIEW_PATH . '/template/messages.php'); ?>
    </div>

</body>
</html>