<?php

require_once(dirname(__FILE__,2). '/src/config/config.php');

$url = substr(urldecode($_SERVER['REQUEST_URI']), -9);

require_once(CONTROLLER_PATH . '/landing.php');

?>