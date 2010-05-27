<?php
require_once(LIBPATH.'/Router.php');

$url = $_SERVER['REQUEST_URI'];
$router = new Router("/pf");
$router->route($url);

