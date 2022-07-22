<?php

require './vendor/autoload.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);

$request = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$view = (empty($request) ? 'home' : $request);

try {
    echo $blade->run($view, ['request' => $view]);
}
catch (Exception $e)
{
    header('Location: /');
    exit();
}

?>
