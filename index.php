<?php
ini_set('display_errors', 'On');
require 'vendor/autoload.php';

/* Load do Framework */
$core = new \Star\Core\Load();
$core->runProject();

/*
    Configuração do arquivo .env
*/
$dotenv = new \Symfony\Component\Dotenv\Dotenv();
$dotenv->load('.env', '.env.dev');