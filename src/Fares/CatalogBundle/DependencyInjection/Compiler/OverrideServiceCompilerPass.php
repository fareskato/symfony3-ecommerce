<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 15.09.17
 * Time: 15:43
 */

// To override the core module services(service in the app bundle )

namespace Fares\CatalogBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
// Override the core module 'category_menu' service
        $container->removeDefinition('category_menu');
        $container->setDefinition('category_menu', $container->getDefinition('fares_catalog.category_menu'));
// Override the core module 'onsale' service
        $container->removeDefinition('onsale');
        $container->setDefinition('onsale',$container->getDefinition('fares_catalog.onsale'));
    }
}