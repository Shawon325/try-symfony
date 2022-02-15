<?php

use App\Controller\WelcomeController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('welcome', '/welcome')
        ->methods(['GET'])
        ->controller([WelcomeController::class, 'index']);
};
