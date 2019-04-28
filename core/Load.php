<?php
namespace Core;

class Load
{
  /*
  function de gerenciamento de carregamento dos
  componentes essencias para funcionamento do project;
  */
  public function runProject()
  {
    $router = new \Core\Router();
    $router->loadRouter();
  }
}
?>
