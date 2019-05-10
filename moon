<?php
require __DIR__."/vendor/autoload.php";
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new \Saaiph\Command\ControllerCommand());
$application->add(new \Saaiph\Command\ModelCommand());
$application->add(new \Saaiph\Command\ServerCommand());
//$application->add(new \Saaiph\Command\CssCommand());
$application->run();