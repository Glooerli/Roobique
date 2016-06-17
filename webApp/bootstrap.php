<?php

namespace roobique
{
    use roobique\Routers\Router;
    use roobique\ValueObjects\Uri;

    require __DIR__ . '/src/autoload.php';
    require __DIR__ . '/var/www/roobique/vendor/autoload.php';

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('Europe/Zurich');

    $router = new Router;
    $uri = new Uri('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    $router->route($uri)->run($uri)->send();
}