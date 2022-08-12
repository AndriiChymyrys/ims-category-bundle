<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\DependencyInjection\ImsCategoryExtension;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\DependencyInjection\Compiler\SideBarLinkCompilerPass;

/**
 * Class ImsCategoryBundle
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle
 */
class ImsCategoryBundle extends Bundle
{
    /**
     * {@inheritDoc}
     */
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new SideBarLinkCompilerPass());
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new ImsCategoryExtension();
    }
}
