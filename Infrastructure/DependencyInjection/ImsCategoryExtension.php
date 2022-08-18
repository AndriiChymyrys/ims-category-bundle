<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class ImsCategoryExtension
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\DependencyInjection
 */
class ImsCategoryExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../../Resources/config')
        );

        $loader->load('domain.xml');
        $loader->load('presentation.xml');
        $loader->load('interaction.xml');
        $loader->load('infrastructure.xml');
    }
}
