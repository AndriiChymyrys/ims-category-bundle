<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Event\FormBuilderFieldsEvent;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\DomainInteractionInterface;

/**
 * Class ImsProductEventSubscriber
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\EventListener
 */
class ImsProductEventSubscriber implements EventSubscriberInterface
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
    public static function getSubscribedEvents()
    {
        return [
            'morph.form.field.builder.imsCreateProductForm' => 'onCreateProductFormEvent',
        ];
    }

    public function onCreateProductFormEvent(FormBuilderFieldsEvent $event)
    {
        $this->domainInteraction->getCreateProductFormEventHandler()->handle($event);
    }
}
