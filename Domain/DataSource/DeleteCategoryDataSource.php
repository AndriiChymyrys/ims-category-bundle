<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource;

use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Service\DeleteCategoryServiceInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Domain\Services\Contracts\DeleteDataSourceInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphCore\DeleteDataSourceDefinitionInterfaceBridge;

/**
 * Class DeleteCategoryDataSource
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource
 */
class DeleteCategoryDataSource implements DeleteDataSourceDefinitionInterfaceBridge
{
    /**
     * @param DeleteCategoryServiceInterface $deleteCategoryService
     */
    public function __construct(
        protected DeleteCategoryServiceInterface $deleteCategoryService,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function getSource(): DeleteDataSourceInterface
    {
        return $this->deleteCategoryService;
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleteItem(array $data): mixed
    {
        return $data['categoryId'];
    }
}
