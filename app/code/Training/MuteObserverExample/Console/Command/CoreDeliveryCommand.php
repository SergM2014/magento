<?php

declare(strict_types=1);

namespace Training\MuteObserverExample\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Training\MuteObserverExample\Model\DeliveryTypes;
use Training\MuteObserverExample\Observer\DeliveryTypesObserver;

class CoreDeliveryCommand extends Command
{
    public function __construct(protected DeliveryTypes $deliveryTypes) 
    { 
        parent::__construct(null);
    }

    protected function configure()
    {
        parent::configure();
        $this->setName('delivery:types:core');
        $this->setDescription('List Delivery Types'); 
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        DeliveryTypesObserver::$muted = true;
        $types = $this->deliveryTypes->toDataObject();
        $output->writeln($types->getData('types'));
        DeliveryTypesObserver::$muted = false;
    }
}