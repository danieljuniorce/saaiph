<?php
require __DIR__."/vendor/autoload.php";
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new \Star\Command\ControllerCommand());
$application->add(new \Star\Command\ModelCommand());
//$application->add(new \Star\Command\CssCommand());
$application->run();