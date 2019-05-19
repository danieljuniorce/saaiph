<?php
namespace Saaiph\Core;

use \Saaiph\Core\Database;

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
  }
}
