<?php

require_once(dirname(__FILE__,2). '/src/config/config.php');

$url = substr(urldecode($_SERVER['REQUEST_URI']), -9);

if($url === '/' || $url === '' || $url === 'index.php'){
    $url = "/landing.php";
}

require_once(CONTROLLER_PATH . $url);

?>