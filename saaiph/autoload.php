<?php
/* AUTOLOAD DO COMPOSER */
require 'vendor/autoload.php';

/* Configuração do arquivo .env */
$dotenv = Dotenv\Dotenv::create(__DIR__."/..");
$dotenv->load();

require 'hooks.php';
global $configs;
use Saaiph\Router\Router;

//Set time_zone
new DateTimeZone($configs['app']['time_zone']);

/* Load do Framework */
$core = new \Saaiph\Core\Load();
$core->runProject();

new Router(__DIR__."/../router/web.php", true, "\Controllers\\");