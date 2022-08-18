<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction;

use WideMorph\Ims\Bundle\ImsCategoryBundle\ImsCategoryBundle;
use WideMorph\Morph\Bundle\MorphCoreBundle\Interaction\DomainInteractionInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Entity\EntityResolverInterface;

/**
 * Class MorphCoreInteraction
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction
 */
class MorphCoreInteraction implements MorphCoreInteractionInterface
{
    /**
     * @param DomainInteractionInterface $domainInteraction
     */
    public function __construct(protected DomainInteractionInterface $domainInteraction)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getDomainInteraction(): DomainInteractionInterface
    {
        return $this->domainInteraction;
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityResolver(): EntityResolverInterface
    {
        return $this->domainInteraction
            ->getEntityResolverFactory()
            ->forBundle(ImsCategoryBundle::class)
            ->attachEntity('Category')
            ->get();
    }
}
