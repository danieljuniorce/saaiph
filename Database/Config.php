<?php
namespace Database;

class Config
{
  private $pdo;
  public function __construct()
  {
    try {
      $this->pdo = new \PDO('mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
      echo 'Connectou';
    } catch (PDOException $e)
    {
      echo 'Falhou a conexão: '.$e->getMessage();
    }
  }
  public static function getInstance()
  {
    static $inst = null;
    if ($inst === null) {
      $inst = new Config();
    }
    return $inst;
  }

}
