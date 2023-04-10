<?php

declare(strict_types=1);

namespace Training\CronExample\Cron;

use Psr\Log\LoggerInterface;

class Example
{
    public function __construct(protected LoggerInterface $logger) {}
    
    public function execute()
    {
        $this->logger->info('Starrting running cron example');
        sleep(2);
        $this->logger->info('cron example finish');
    }
}