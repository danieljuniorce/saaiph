<?php
namespace Star\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServerCommand extends Command
{
    public function configure()
    {
        $this
            ->setName("serve")
            ->setDescription("Init server localhost!");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("--------------------------------------------");
        $output->writeln(" SERVIDOR INICIADO EM http://localhost:8080 ");
        $output->writeln("--------------------------------------------");
        shell_exec("php -S localhost:8080");
    }
}