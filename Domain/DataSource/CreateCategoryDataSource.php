<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource;

use WideMorph\Ims\Bundle\ImsCategoryBundle\Presentation\Form\Type\CreateCategoryFormType;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Service\CreateCategoryServiceInterface;
use WideMorph\Morph\Bundle\MorphCoreBundle\Interaction\Contract\DataSource\CreateDataSourceInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphCore\FormDataSourceDefinitionInterfaceBridge;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphCore\CreateDataSourceDefinitionInterfaceBridge;

/**
 * Class CreateCategoryDataSource
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource
 */
class CreateCategoryDataSource implements CreateDataSourceDefinitionInterfaceBridge, FormDataSourceDefinitionInterfaceBridge
{
    /**
     * @param CreateCategoryServiceInterface $createCategoryService
     */
    public function __construct(protected CreateCategoryServiceInterface $createCategoryService)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getSource(): CreateDataSourceInterface
    {
        return $this->createCategoryService;
    }

    /**
     * {@inheritDoc}
     */
    public function getForm(): string
    {
        return CreateCategoryFormType::class;
    }

    /**
     * {@inheritDoc}
     */
    public function getFormOptions(): array
    {
        return [];
    }
}
