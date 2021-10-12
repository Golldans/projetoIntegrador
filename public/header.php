<?php

    $var = "Evitando default"

?>

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
                <span><h2>connect-></h2>
                <h2>Opportunity.php</h2></span><br>
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