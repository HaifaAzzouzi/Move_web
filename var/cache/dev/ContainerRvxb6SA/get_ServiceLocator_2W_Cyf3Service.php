<?php

namespace ContainerRvxb6SA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2W_Cyf3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2W.cyf3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2W.cyf3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventplaceRepository' => ['privates', 'App\\Repository\\EventplaceRepository', 'getEventplaceRepositoryService', true],
        ], [
            'eventplaceRepository' => 'App\\Repository\\EventplaceRepository',
        ]);
    }
}
