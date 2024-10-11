<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            // 'controller_name' => 'BaseController',
        ]);
    }
    #[Route('/landing', name: 'app_landing')]
    public function landing(): Response
    {
        return $this->render('landing.html.twig', [
            // 'controller_name' => 'BaseController',
        ]);
    }
   
}
