<?php
namespace Firelike\Arin\Service\Factory;

use Firelike\Arin\Service\ArinService;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class ArinServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $sm, $requestedName, array $options = null)
    {
        $service = new ArinService();

        $config = $sm->get('Config');
        if (isset($config['arin_service'])) {
            if (isset($config['arin_service']['service_url'])) {
                $service->setServiceUrl($config['arin_service']['service_url']);
            }
        }

        return $service;
    }
}