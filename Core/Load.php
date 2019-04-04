<?php
namespace Core;

class Load
{
  //Instancia da Classe load com padrão singleton
  public static function getLoad()
  {
    static $inst = null;
    if ($inst === null) {
      $inst = new Load();
    }
    return $inst;
  }

  /*
  function de gerenciamento de carregamento dos
  componentes essencias para funcionamento do project;
  */
  public function runProject()
  {
    //Inicialização do componente Router;
    \Core\Router::getRouter()->runRouter();
  }
}
?>
