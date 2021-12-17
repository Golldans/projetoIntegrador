<?php
$var = "Evitando default hacklang";
isset($_SESSION['login']) ? $usuario = unserialize($_SESSION['login']) : '';
$last = substr($usuario->last, 0, 10);
$last = (explode("-",$last));
$last = $last[2] . "/" . $last[1] . "/" . $last[0];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Editais</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/social.css"/>
    <link rel="icon" href="./assets/img/icon.png"/>

</head>
<header>
    <nav>
        <a href="http://localhost/projetoIntegrador/public/" class="flexBox">
            <img src="./assets/img/icon.png" alt="" srcset="">
            Golldans
        </a>
        <a href="http://localhost/projetoIntegrador/src/controllers/session_destroy.php">
            <button>Sair</button>
        </a>
    </nav>
    <section id="profile" class="flexBox">
        <div class="banner background">

        </div>
        <div class="to-post flexBox">
        
        <div id="perfil" class="flexBox">
            <div id="dados">
                <ul>
                    <li>Bem vindo novamente, <?= $usuario->username ?></li>
                    <li>Sua última atividade foi em: <?= $last ?></li>
                </ul>
            </div>
                <div id="foto" class="background" style="background-image: url('./assets/img/icon.png');" alt="Credit: https://br.pinterest.com/pin/151433606205391015/" title="Credit: https://br.pinterest.com/pin/151433606205391015/">
                </div>
            </input>
        </div>

        <div id="postar">

        </div>

        </div>
    </section>
</header>
<body>

<?php if ($usuario->empresa): ?>
<div id="posting" class="flexBox">
        <form action="" method="post" id="to-post" class="flexBox">
            <input type="text" name="titulo" id="title" placeholder="Titulo">
            <textarea name="corpo" id="text" placeholder="Corpo do texto"></textarea>
            <div id="form-actions">
                <input type="text" name="link" id="link" placeholder="Link">
                <button>Enviar</button>
            </div>
        </form>
</div>
<?php endif; ?>

<div id="posts" class="flexBox">

</div>

</body>
<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/social.js"></script>

</html>