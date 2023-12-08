<?php

namespace OldSound\RabbitMqBundle\Command;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Command\Command;

abstract class BaseRabbitMqCommand extends Command
{

    private $container;

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
}
