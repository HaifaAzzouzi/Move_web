<?php

namespace ContainerLkW2wyv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FtHgDb1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FtHgDb1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FtHgDb1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventRepository' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'eventRepository' => 'App\\Repository\\EventRepository',
            'flashy' => '?',
            'slugger' => '?',
        ]);
    }
}
