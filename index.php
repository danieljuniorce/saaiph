<?php
ini_set('display_errors', 'On');
require 'vendor/autoload.php';

/* Configuração do arquivo .env */
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

global $app;
$app = require('config/app.php');
/* Load do Framework */
$core = new \Star\Core\Load();
$core->runProject();

foreach (PDO::getAvailableDrivers() as $driver) {
    echo $driver;
}
