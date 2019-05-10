<?php
namespace Saaiph\Core;

use Illuminate\Database\Capsule\Manager as Capsule;
class Database
{
    public function __construct() {}

    public function connect()
    {
        global $app;
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => $app['dbconfig']['driver'],
            'host'      => $app['dbconfig']['host'],
            'database'  => $app['dbconfig']['database'],
            'username'  => $app['dbconfig']['username'],
            'password'  => $app['dbconfig']['password'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $capsule->bootEloquent();
    }
}
