<?php

namespace Container7PqHvYz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BZS4fRuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bZS4fRu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bZS4fRu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sortie' => ['privates', '.errored..service_locator.bZS4fRu.App\\Entity\\Sortie', NULL, 'Cannot autowire service ".service_locator.bZS4fRu": it references class "App\\Entity\\Sortie" but no such service exists.'],
        ], [
            'sortie' => 'App\\Entity\\Sortie',
        ]);
    }
}
