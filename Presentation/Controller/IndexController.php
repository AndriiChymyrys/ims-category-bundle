<?php

declare(strict_types=1);

namespace WideMorph\Ims\Bundle\ImsCategoryBundle\Presentation\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@ImsCategory/index/index.html.twig');
    }
}
