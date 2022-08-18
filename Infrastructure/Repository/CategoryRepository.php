<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Repository;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Entity\Category;

/**
 * Class CategoryRepository
 *
 * @package WideMorph\Ims\Bundle\ImsCategoryBundle\Infrastructure\Repository
 */
class CategoryRepository extends ServiceEntityRepository
{
    /**
     * @param ManagerRegistry $registry
     * @param string $entityClass
     */
    public function __construct(ManagerRegistry $registry, string $entityClass = Category::class)
    {
        parent::__construct($registry, $entityClass);
    }
}
