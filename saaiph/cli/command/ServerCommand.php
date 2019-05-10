<?php
namespace Saaiph\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ServerCommand extends Command
{
    public function configure()
    {
        $this
            ->setName("serve")
            ->addArgument("porta", InputArgument::REQUIRED, "Digite a porta do servidor web?")
            ->setDescription("Init server localhost!");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $porta = $input->getArgument("porta");
        $output->writeln("--------------------------------------------");
        $output->writeln(" SERVIDOR INICIADO EM http://localhost:{$porta} ");
        $output->writeln("--------------------------------------------");
        shell_exec("php -S localhost:{$porta}");
    }
}