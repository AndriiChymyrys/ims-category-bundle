<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Trait;

use App\Entity\Product;
use Doctrine\ORM\Mapping as ORM;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Entity\Category;

trait CategoryProductRelationTrait
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="products")
     */
    protected ?Category $category;

    /**
     * @return Category|null
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category|null $category
     *
     * @return CategoryProductRelationTrait|Product
     */
    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
