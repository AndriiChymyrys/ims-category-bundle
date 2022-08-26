<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Service;

use Doctrine\ORM\EntityManagerInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\MorphCoreInteractionInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Input\InputDataCollectionInterface;

/**
 * Class DeleteCategoryService
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Service
 */
class DeleteCategoryService implements DeleteCategoryServiceInterface
{
    /**
     * @param EntityManagerInterface $entityManager
     * @param MorphCoreInteractionInterface $morphCoreInteraction
     */
    public function __construct(
        protected EntityManagerInterface $entityManager,
        protected MorphCoreInteractionInterface $morphCoreInteraction
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function delete(InputDataCollectionInterface $inputDataCollection, mixed $target): mixed
    {
        $category = $this->morphCoreInteraction
            ->getEntityResolver()
            ->getEntityRepository('Category')
            ->find($target);

        if ($category) {
            $this->entityManager->remove($category);
            $this->entityManager->flush();
        }

        return true;
    }
}
