<?php
/* AUTOLOAD DO COMPOSER */
require 'vendor/autoload.php';

/* Configuração do arquivo .env */
$dotenv = Dotenv\Dotenv::create(__DIR__."/..");
$dotenv->load();

/* Require do array com as configurações */
global $app;
$app = require(__DIR__.'/../config/app.php');

//Active debug in code;
ini_set('display_errors', $app['debug']);

//Set time_zone
new DateTimeZone($app['time_zone']);

//Require in file
global $language;
$language = require "language/{$app['language']}.php";

/* Load do Framework */
$core = new \Star\Core\Load();
$core->runProject();