<?php

require_once(dirname(__FILE__,2). '/config/config.php');

session_start();

session_destroy();

header('Location: ../../public/index.php');

?>


