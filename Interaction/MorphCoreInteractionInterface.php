<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction;

use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Entity\EntityResolverInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Interaction\DomainInteractionInterface;

/**
 * Class MorphCoreInteractionInterface
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction
 */
interface MorphCoreInteractionInterface
{
    /**
     * @return DomainInteractionInterface
     */
    public function getDomainInteraction(): DomainInteractionInterface;

    /**
     * @return EntityResolverInterface
     */
    public function getEntityResolver(): EntityResolverInterface;
}
