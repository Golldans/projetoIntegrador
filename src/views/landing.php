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
                <li><a href="#">Início</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="#">Abuble</a></li>
                <li><a href="#">Conecte-se</a></li>
            </ol>
        </nav>
        <div id="mote">
            <div id="mote-content">
                <h1>GOLLDANS</h1>
                <span>
                    <h2>connect-></h2>
                    <h2>Opportunity.php</h2>
                </span><br>
                <p>Bem vindo novamente, <?php echo isset($_SESSION['user']) ?  $_SESSION['user'] : "Visitante" ?></p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis harum molestiae necessitatibus id placeat inventore.</p>
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