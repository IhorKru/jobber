<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;

class ukCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:cs.ukparser')
            // the short description shown while running "php bin/console list"
            ->setDescription('Command initiates request to process UK data from CreditSafe')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Command initiates request to process UK data from CreditSafe')
            //arguements that will be passed to below execute function
            ->addArgument('csv', InputArgument::REQUIRED, 'Link to CSV file to process')
            ->addArgument('asofdate', InputArgument::REQUIRED, 'Date of file generation')
        ;
    }

    protected function execute (InputInterface $input, OutputInterface $output)
    {
        $ukparser = $this->getContainer()->get('cs.ukparser');
        $csvfile = $input->getArgument('csv');
        $asoffdate = $input->getArgument('asofdate');
        $ukparser -> ukParser($csvfile, $asoffdate);
    }
}