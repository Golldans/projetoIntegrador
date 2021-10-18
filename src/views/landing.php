<?php

loadModel('Login');
isset($_SESSION['login']) ? $usuario = unserialize($_SESSION['login']) : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='./assets/css/reset.css'>
    <link rel="stylesheet" type="text/css" href='./assets/css/style.css'>
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <title>Document</title>
</head>

<body>

    <header>
        <nav>
            <ol>
                <li><a href="">Início</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="register">Conecte-se</a></li>
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