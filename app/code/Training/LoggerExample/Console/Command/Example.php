<?php

declare(strict_types=1);

namespace Training\LoggerExample\Console\Command;

use Monolog\Handler\NativeMailerHandler;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Training\LoggerExample\Logger\Logger;
use Monolog\Handler\StreamHandler;

class Example extends Command
{
    public function __construct(protected Logger $logger)
    {
        parent::__construct(null);
    }

    protected function configure()
    {
        parent::configure();
        $this->setName('logger:example:run');
        $this->setDescription('Run Logger Example');
       
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        
       
        $this->logger->info('Logger Example info');
        $this->logger->debug('Logger Example debug');
        $this->logger->error('Logger Example error');
        $this->logger->critical('Logger Example critical');
        
    }
}