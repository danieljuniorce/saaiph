<?php
    //Require do Autoload do projeto.
    require ('vendor/autoload.php');
    ini_set('display_errors', 'On');
    //Load do arquivo .env
    $dotenv = Dotenv\Dotenv::create ( __DIR__ );
    $dotenv->load();

    \Database\Config::getInstance();
    //Instanciando a classe Load;
    \Core\Load::getLoad()->runProject();
?>
