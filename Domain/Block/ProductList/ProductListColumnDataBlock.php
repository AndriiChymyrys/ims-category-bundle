<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\Block\ProductList;

use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\Bridge\MorphView\AbstractBlockBridge;

class ProductListColumnDataBlock extends AbstractBlockBridge
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
        return 'ims_product.list.column-data';
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplatePath(): string
    {
        return '@ImsCategory/block/_product_column_data_block.html.twig';
    }
}
