<?php

declare(strict_types=1);

namespace Training\CronConfigPath\Cron;

use Psr\Log\LoggerInterface;

class Example 
{
    public function __construct(protected LoggerInterface $logger) {}

    public function execute()
    {
        $this->logger->info('Training CronConfigPath');
    }
}