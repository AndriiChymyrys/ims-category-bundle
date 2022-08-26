<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Presentation\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Interaction\MorphCoreInteractionInterface;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource\SelectCategoryDataSource;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource\CreateCategoryDataSource;
use WideMorph\Ims\Bundle\ImsCategoryBundle\Domain\DataSource\DeleteCategoryDataSource;

class IndexController extends AbstractController
{
    /**
     * @param MorphCoreInteractionInterface $morphCoreInteraction
     *
     * @return Response
     */
    public function index(MorphCoreInteractionInterface $morphCoreInteraction): Response
    {
        $outputData = $morphCoreInteraction->getDomainInteraction()->getSelectDataSourceService()->execute(
            SelectCategoryDataSource::class
        );

        return $this->render('@ImsCategory/index/index.html.twig', ['output' => $outputData]);
    }

    /**
     * @param MorphCoreInteractionInterface $morphCoreInteraction
     *
     * @return Response
     */
    public function create(MorphCoreInteractionInterface $morphCoreInteraction): Response
    {
        $outputData = $morphCoreInteraction->getDomainInteraction()->getCreateDataSourceService()->execute(
            CreateCategoryDataSource::class
        );

        return $this->render('@ImsCategory/index/create.html.twig', ['output' => $outputData]);
    }

    /**
     * @param MorphCoreInteractionInterface $morphCoreInteraction
     * @param int $id
     *
     * @return Response
     */
    public function delete(MorphCoreInteractionInterface $morphCoreInteraction, int $id): Response
    {
        $morphCoreInteraction->getDomainInteraction()->getDeleteDataSourceService()->execute(
            DeleteCategoryDataSource::class, ['categoryId' => $id]
        );

        return $this->redirectToRoute('category_ims_category_list');
    }
}
