<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppsChatController extends AbstractController
{
    #[Route('/apps/chat/drawer', name: 'app_apps_chat')]
    public function index(): Response
    {
        return $this->render('apps/chat/drawer.html.twig', [
        ]);
    }
}
