<?php
namespace Saaiph\Command;

use Saaiph\Helper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CssCommand extends Command
{
    public function configure()
    {
        $this
            //Name the command
            ->setName("make:css")
            //Description the of command
            ->setDescription("Create new Css")
            //Argument required
            ->addArgument("css", InputArgument::REQUIRED, "Qual é o nome do Css?");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        //Instanciando o argumento enviado pelo shell na variavel $controller
        $css = ($input->getArgument("css") ? $input->getArgument("css") : false);

        if ($css) {
            //Local a armazenar o novo controller;
            $folder = "resources/css/{$css}.css";
            //Template do arquivo
            //$folderTemplate = __DIR__."/storage/css.css";

            Helper::hCreateFile($folder, "");
            
            $output->writeln("------------------------------");
            $output->writeln("   CSS CRIADO COM SUCESSO!  ");
            $output->writeln("------------------------------");
        }
    }
}