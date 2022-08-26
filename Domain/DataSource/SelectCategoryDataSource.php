<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource;

use Doctrine\ORM\EntityManagerInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\MorphCoreInteractionInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Input\InputDataCollectionInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Contracts\SelectDataSourceInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphCore\SelectDataSourceDefinitionInterfaceBridge;

/**
 * Class SelectCategoryDataSource
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource
 */
class SelectCategoryDataSource implements SelectDataSourceDefinitionInterfaceBridge
{
    /** @var int */
    public const PER_PAGE = 20;

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
    public function getSource(): SelectDataSourceInterface
    {
        return $this->entityManager->getRepository(
            $this->morphCoreInteraction->getEntityResolver()->getEntityName('Category')
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getSourcePagination(InputDataCollectionInterface $inputDataCollection): ?array
    {
        $page = $inputDataCollection->containsKey('page') ? $inputDataCollection->get('page') : 1;

        return [$page, static::PER_PAGE];
    }
}
