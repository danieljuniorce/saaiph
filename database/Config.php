<?php
namespace Database;
use Illuminate\Database\Capsule\Manager as Capsule;
class Config
{
  public function __construct()
  {
    $capsule = new Capsule;
    //Alterar o array de conexão ao enviar para server de produção.
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

}
