<?php
    //Require do Autoload do projeto.
    require ('vendor/autoload.php');

    ini_set('display_errors', 'On');

    //Instanciando a classe Load;
    \Core\Load::getLoad()->runProject();
?>
