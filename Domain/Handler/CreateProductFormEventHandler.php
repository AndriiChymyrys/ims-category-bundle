<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Handler;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Event\FormBuilderFieldsEvent;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\MorphCoreInteractionInterface;

class CreateProductFormEventHandler implements CreateProductFormEventHandlerInterface
{
    /**
     * @param MorphCoreInteractionInterface $morphCoreInteraction
     */
    public function __construct(protected MorphCoreInteractionInterface $morphCoreInteraction)
    {
    }

    /**
     * @param FormBuilderFieldsEvent $event
     *
     * @return void
     */
    public function handle(FormBuilderFieldsEvent $event): void
    {
        $event->addNewField(
            'category',
            EntityType::class,
            2,
            [
                'class' => $this->morphCoreInteraction->getEntityResolver()->getEntityName('Category'),
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]
        );
    }
}
