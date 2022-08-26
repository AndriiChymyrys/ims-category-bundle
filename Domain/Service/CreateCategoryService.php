<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Service;

use Doctrine\ORM\EntityManagerInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Entity\Category;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Input\InputDataCollectionInterface;

/**
 * Class CreateCategoryService
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Service
 */
class CreateCategoryService implements CreateCategoryServiceInterface
{
    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(protected EntityManagerInterface $entityManager)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function create(InputDataCollectionInterface $inputDataCollection): mixed
    {
        if ($inputDataCollection->hasForm()) {
            /** @var Category $category */
            $category = $inputDataCollection->getForm()->getData();

            $this->entityManager->persist($category);
            $this->entityManager->flush();

            return $category;
        }

        return [];
    }
}
