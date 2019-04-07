<?php
    //Require do Autoload do projeto.
    require ('vendor/autoload.php');

    //Display ON
    ini_set('display_errors', 'On');

    //Load do arquivo .env
    $dotenv = Dotenv\Dotenv::create ( __DIR__ );
    $dotenv->load();

    //Carregando configuração Database
    \Database\Config::getInstance();

    //Instanciando a classe Load;
    \Core\Load::getLoad()->runProject();
?>
