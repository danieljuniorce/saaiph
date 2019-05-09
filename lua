<?php
require __DIR__."/vendor/autoload.php";
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new \Star\Command\ControllerCommand());

$application->run();