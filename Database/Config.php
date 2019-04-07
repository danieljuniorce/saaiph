<?php
namespace Database;
use Illuminate\Database\Capsule\Manager as Capsule;
class Config
{
  public function __construct()
  {
    $capsule = new Capsule;
    $capsule->addConnection([
        'driver'    => $_ENV['DB_DRIVER'],
        'host'      => $_ENV['DB_HOST'],
        'database'  => $_ENV['DB_NAME'],
        'username'  => $_ENV['DB_USER'],
        'password'  => $_ENV['DB_PASS'],
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
    $capsule->bootEloquent();
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
