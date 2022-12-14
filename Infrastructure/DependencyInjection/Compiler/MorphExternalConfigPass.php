<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\MorphConfigInteractionInterface;

/**
 * Class MorphExternalConfigPass
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\DependencyInjection\Compiler
 */
class MorphExternalConfigPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasDefinition(MorphConfigInteractionInterface::EXTERNAL_BUNDLE_CONFIG_SERVICE_NAME)) {
            $definition = $container->getDefinition(
                MorphConfigInteractionInterface::EXTERNAL_BUNDLE_CONFIG_SERVICE_NAME
            );
            $definition->addMethodCall(
                'set',
                [
                    'WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Entity',
                    [MorphConfigInteractionInterface::DB_PREFIX_SETTING_NAME => 'ims']
                ]
            );
        }
    }
}
