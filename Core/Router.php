<?php
namespace Core;

//Classe de gerenciamento de rotas;
class Router
{
  //function de de instancia da classe Router pelo padrão singleton
  public static function getRouter()
  {
    static $inst = null;
    if ($inst === null) {
      $inst = new Router();
    }
    return $inst;
  }

  public function runRouter()
  {
    echo $_GET['url'];
  }
}
