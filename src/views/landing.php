<?php

loadModel('Login');
isset($_SESSION['login']) ? $usuario = unserialize($_SESSION['login']) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='./assets/css/reset.css'>
    <link rel="stylesheet" type="text/css" href='./assets/css/style.css'>
    <link rel="icon" href="./assets/img/icon.png">
    <script src="./assets/js/jquery-3.6.0.js"></script>
    <script src="./assets/js/main.js"></script>
    <title>Golldans</title>
</head>

<body>

    <header>
        <nav>
            <ol>
                <li><a href="">Início</a></li>
                <li><a href="#features">Quem somos</a></li>
                <li><a href="register.php">Conecte-se</a></li>
            </ol>
        </nav>
        <div id="mote">
            <div id="mote-content">
                <h1>GOLLDANS</h1>
                <span>
                    <h2>connect-></h2>
                    <h2>Opportunity.php</h2>
                </span><br>
                <p>Bem vindo novamente, <?php echo isset($usuario) ?  $usuario->username : "Visitante" ?></p>
                <div id="mote-buttons"><?php echo isset($_SESSION['login']) ? "<a href='social.php'><button>Encontre editais</button></a>" :  "<a href='login.php'><button>Entre</button></a><a href='register.php'><button>Cadastre-se</button></a>" ?></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vitae assumenda ipsam illo quas voluptate deserunt sint itaque tempora eaque.</p>
            </div>
            <div id="mote-logo">
                <pre id="rotate">
                .      .-~\
   / `-'\.'    `- :
   |    /          `._
   |   |   .-.        {
    \  |   `-'         `.
     \ |                /
~-.`. \|            .-~_
    .\-.\       .-~      \
     `-'/~~ -.~          /
   .-~/|`-._ /~~-.~ -- ~
  /  |  \    ~- . _\
                </pre>
            </div>
        </div>
    </header>

    <main>
        <section id="features">
            <div class="feat">
                <div class="showoff" style="background-image: url('./assets/img/feat1.gif');"></div>
                <div class="showin">
                    <h1>Tudo é um</h1>
                    <h2>Procurar é coisa do passado</h2>
                    <h3>Esse é o principal fundamento do nosso sistema, mesmo em um mundo globalizado ainda estamos atrasados nas questões de oportunidades e, um passo de cada vez, certo?</h3>
                </div>
            </div>
            <div class="feat">
                <div class="showoff" style="background-image: url('./assets/img/feat2.gif');"></div>
                <div class="showin">
                    <h1>A todo momento</h1>
                    <h2>Sempre tem algo diferente</h2>
                    <h3>Quando tudo estiver pronto, todos os editais irão convergir aqui, e a todo momento você terá uma nova chance.</h3>
                </div>
            </div>
            <div class="feat">
                <div class="showoff" style="background-image: url('./assets/img/feat3.gif');"></div>
                <div class="showin">
                    <h1>Continue tentando</h1>
                    <h2>De novo e de novo</h2>
                    <h3>E, se agora você não encontrou nada que te interesse, espere pela próxima vez e continue tentando, todo mundo encontra algo que o agrade alguma hora.</h3>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <pre>
   @                 ________
     \____        /                 \
     /        \      /                   \
     \_       \    /                     \
        \       \  (                       )
         \       \_\                      /
          \          \                    /___
           \_____\_________/____"-_
   </pre>

        <h1>Criado por Cristiano Henrique Ferreira</h1>
        <h2>@Golldan</h2>

    </footer>

</body>

</html>