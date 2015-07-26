<?php
use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

// set timezone for timestamps etc
date_default_timezone_set('Mexico/General');

session_cache_limiter(false);
session_start();

ini_set('display_errors', On);

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$app = new Slim([
	'mode'	=> file_get_contents(INC_ROOT . '/mode.php'),
	'view'	=> new Twig(),
	'templates.path' => INC_ROOT . '/app/views'
]);

$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});

require 'routes.php';

$view = $app->view();

$view->parseOptions = [
	'debug'	=> 'development'
];

$view->parserExtensions = [
	new TwigExtension
];