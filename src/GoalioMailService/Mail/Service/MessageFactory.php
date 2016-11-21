<?php

namespace GoalioMailService\Mail\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MessageFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new Message(
            $serviceLocator->get('goaliomailservice_renderer'),
            $serviceLocator->get('goaliomailservice_transport')
        );
    }
}
