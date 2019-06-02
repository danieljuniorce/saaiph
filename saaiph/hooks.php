<?php
/*
 *  Function buscando auxiliar em algumas funcionlidades básicas.
 */
//configs globais;

global $configs;
$configs = [
    "app" => require(__DIR__.'/../config/app.php')
];


//Para acesso aos component em Js e Css no project
function asset($component)
{
    echo "resources/$component";
}