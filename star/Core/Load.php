<?php
namespace Star\Core;

use \Star\Core\Router;
use \Star\Core\Database;

class Load
{
  /*
  function de gerenciamento de carregamento dos
  componentes essencias para funcionamento do project;
  */
  public function runProject()
  {
    $database = new Database();
    $database->connect();

    $router = new Router();
    $router->loadRouter();

  }
}
