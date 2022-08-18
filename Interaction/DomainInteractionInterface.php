<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction;

use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Handler\CreateProductFormEventHandlerInterface;

/**
 * Class DomainInteractionInterface
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction
 */
interface DomainInteractionInterface
{
    /**
     * @return CreateProductFormEventHandlerInterface
     */
    public function getCreateProductFormEventHandler(): CreateProductFormEventHandlerInterface;
}
