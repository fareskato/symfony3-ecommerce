<?php

namespace Fares\CatalogBundle;

use Fares\CatalogBundle\DependencyInjection\Compiler\OverrideServiceCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FaresCatalogBundle extends Bundle
{

    /**
     * To override the core module services(services in AppBundle)
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass( new OverrideServiceCompilerPass());
    }
}
