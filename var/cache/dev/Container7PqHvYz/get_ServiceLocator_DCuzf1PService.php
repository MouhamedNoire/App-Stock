<?php

namespace Container7PqHvYz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DCuzf1PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DCuzf1P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DCuzf1P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entreeRepository' => ['privates', 'App\\Repository\\EntreeRepository', 'getEntreeRepositoryService', true],
        ], [
            'entreeRepository' => 'App\\Repository\\EntreeRepository',
        ]);
    }
}
