<?php
    //Require do Autoload do projeto.
    require ('vendor/autoload.php');

    //Display ON
    ini_set('display_errors', 'On');

    //Load do arquivo .env
    try {
      $dotenv = Dotenv\Dotenv::create ( __DIR__ );
      $dotenv->load();
    } catch (Exception $e) {
      //desativa em produção o .env
    }


    //Carregando configuração Database
    $db = new \Database\Config();

    //Instanciando a classe Load;
    \Core\Load::getLoad()->runProject();
?>
