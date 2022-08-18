<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Handler;

use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Event\FormBuilderFieldsEvent;

/**
 * Class CreateProductFormEventHandlerInterface
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Handler
 */
interface CreateProductFormEventHandlerInterface
{
    /**
     * @param FormBuilderFieldsEvent $event
     *
     * @return void
     */
    public function handle(FormBuilderFieldsEvent $event): void;
}
