<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }

    #[Route('/demo2', name: 'app_demo2')]
    public function demo2(): Response
    {
        return $this->render('demo/_demo2.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }

    #[Route('/demo3', name: 'app_demo3')]
    public function demo3(): Response
    {
        return $this->render('demo/demo3.html.twig');
    }
}
