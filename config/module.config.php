<?php
return array(
    'service_manager' => array(
        'factories' => array(
            Firelike\Arin\Service\ArinService::class => Firelike\Arin\Service\Factory\ArinServiceFactory::class,
        )
    )
);