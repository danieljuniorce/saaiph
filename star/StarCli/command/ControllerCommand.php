<?php
namespace Star\Command;

use Star\Helper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ControllerCommand extends Command
{
    public function configure()
    {
        $this
            ->setName("make:controller")
            ->setDescription("Create new Controller")
            ->addArgument("controller", InputArgument::REQUIRED, "Qual é o nome do controller?");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $controller = ($input->getArgument("controller") ? $input->getArgument("controller") : false);

        if ($controller) {
            $folder = "app/Controllers/{$controller}.php";
            $folderTemplate = __DIR__."/storage/controller.php";
            Helper::hCreateFile($folder, Helper::hReplace($folderTemplate, [
                "nameController" => $controller
            ]));

            $output->writeln("CONTROLLER CRIADO COM SUCESSO!");
        }
    }
}