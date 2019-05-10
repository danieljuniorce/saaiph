<?php
namespace Saaiph\Command;

use Saaiph\Helper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ControllerCommand extends Command
{
    public function configure()
    {
        $this
            //Name the command
            ->setName("make:controller")
            //Description the of command
            ->setDescription("Create new Controller")
            //Argument required
            ->addArgument("controller", InputArgument::REQUIRED, "Qual é o nome do controller?");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        //Instanciando o argumento enviado pelo shell na variavel $controller
        $controller = ($input->getArgument("controller") ? $input->getArgument("controller") : false);

        if ($controller) {
            //Local a armazenar o novo controller;
            $folder = "app/Controllers/{$controller}.php";
            //Template do arquivo
            $folderTemplate = __DIR__."/storage/controller.php";
            /*
            | hCreateFile criando novo arquivo, e usando a função hReplace
            | pega o arquivo template e o dados do replace e alterar o nameController.
            */
            $make = Helper::hCreateFile($folder, Helper::hReplace($folderTemplate, [
                "nameController" => $controller
            ]));
            if ($make) {
                $output->writeln("------------------------------");
                $output->writeln("CONTROLLER CRIADO COM SUCESSO!");
                $output->writeln("------------------------------");
            } else {
                $output->writeln("------------------------------");
                $output->writeln("  CONTROLLER NÃO FOI CRIADO!  ");
                $output->writeln("------------------------------");
            }
        }
    }
}