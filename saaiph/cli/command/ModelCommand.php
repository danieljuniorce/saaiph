<?php
namespace Saaiph\Command;

use Saaiph\Helper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ModelCommand extends Command
{
    public function configure()
    {
        $this
            //Name the command
            ->setName("make:model")
            //Description the of command
            ->setDescription("Create new Model")
            //Argument required
            ->addArgument("model", InputArgument::REQUIRED, "Qual é o nome do model?");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        //Instanciando o argumento enviado pelo shell na variavel $controller
        $model = ($input->getArgument("model") ? $input->getArgument("model") : false);

        if ($model) {
            //Local a armazenar o novo controller;
            $folder = "app/Models/{$model}.php";
            //Template do arquivo
            $folderTemplate = __DIR__."/storage/model.php";
            /*
            | hCreateFile criando novo arquivo, e usando a função hReplace
            | pega o arquivo template e o dados do replace e alterar o nameController.
            */
            $make = Helper::hCreateFile($folder, Helper::hReplace($folderTemplate, [
                "nameModel" => $model,
                "nameTable" => strtolower("{$model}s")
            ]));
            if ($make) {
                $output->writeln("------------------------------");
                $output->writeln("   MODEL CRIADO COM SUCESSO!  ");
                $output->writeln("------------------------------");
            } else {
                $output->writeln("------------------------------");
                $output->writeln("     MODEL NÃO FOI CRIADO!    ");
                $output->writeln("------------------------------");
            }
        }
    }
}