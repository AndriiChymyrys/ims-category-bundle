<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Repository;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Entity\Category;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\MorphCoreInteractionInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Input\InputDataCollectionInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphCore\SelectDataSourceInterfaceBridge;

/**
 * Class CategoryRepository
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Repository
 */
class CategoryRepository extends ServiceEntityRepository implements SelectDataSourceInterfaceBridge
{
    /** @var string */
    public const CONTEXT_NAME_SELECT_CATEGORY = 'select.category.list';

    /**
     * @param ManagerRegistry $registry
     * @param MorphCoreInteractionInterface $morphCoreInteraction
     * @param string $entityClass
     */
    public function __construct(
        ManagerRegistry $registry,
        protected MorphCoreInteractionInterface $morphCoreInteraction,
        string $entityClass = Category::class
    ) {
        parent::__construct($registry, $entityClass);
    }

    /**
     * {@inheritDoc}
     */
    public function select(InputDataCollectionInterface $inputDataCollection, ?array $pagination = null): mixed
    {
        $queryContext = $this->morphCoreInteraction
            ->getDomainInteraction()
            ->getDoctrineDataFilterContextFactory()
            ->forQueryBuilder(
                $this->createQueryBuilder('p'),
                static::CONTEXT_NAME_SELECT_CATEGORY,
                true
            );

        [$page, $repPage] = $pagination;

        return $queryContext->execute()->setPagination($page, $repPage)->getResult();
    }
}
