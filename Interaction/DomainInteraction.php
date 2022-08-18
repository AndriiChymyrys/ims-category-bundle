<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction;

use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Handler\CreateProductFormEventHandlerInterface;

class DomainInteraction implements DomainInteractionInterface
{
    public function __construct(protected CreateProductFormEventHandlerInterface $createProductFormEventHandler)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateProductFormEventHandler(): CreateProductFormEventHandlerInterface
    {
        return $this->createProductFormEventHandler;
    }
}
