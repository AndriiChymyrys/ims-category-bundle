<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Block\ProductList;

use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphView\AbstractBlockBridge;

/**
 * Class ProductListColumnNameBlock
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Block\ProductList
 */
class ProductListColumnNameBlock extends AbstractBlockBridge
{
    /**
     * {@inheritDoc}
     */
    public function getPriority(): int
    {
        return 1;
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockName(): string
    {
        return 'ims_product.list.column-name';
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplatePath(): string
    {
        return '@ImsCategory/block/_product_column_name_block.html.twig';
    }
}
