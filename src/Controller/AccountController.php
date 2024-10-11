<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account/activity', name: 'app_account_activity')]
    public function activity(): Response
    {
        return $this->render('account/activity.html.twig', [
            // 'controller_name' => 'AccountController',
        ]);
    }
    #[Route('/account/api_keys', name: 'app_account_api_keys')]
    public function api_keys(): Response
    {
        return $this->render('account/api_keys.html.twig', [
            // 'controller_name' => 'AccountController',
        ]);
    }
    #[Route('account/billing', name: 'app_billing')]
    public function billiding(): Response
    {
        return $this->render('account/billing.html.twig', [
        ]);
    }
    #[Route('account/logs', name: 'app_logs')]
    public function logs(): Response
    {
        return $this->render('account/logs.html.twig', [
        ]);
    }
    #[Route('account/overview', name: 'app_overview')]
    public function overview(): Response
    {
        return $this->render('account/overview.html.twig', [
        ]);
    }
    #[Route('account/referrals', name: 'app_referrals')]
    public function referrals(): Response
    {
        return $this->render('account/referrals.html.twig', [
        ]);
    }
    #[Route('account/security', name: 'app_security')]
    public function security(): Response
    {
        return $this->render('account/security.html.twig', [
        ]);
    }
    #[Route('account/settings', name: 'app_settings')]
    public function settings(): Response
    {
        return $this->render('account/settings.html.twig', [
        ]);
    }
    #[Route('account/statements', name: 'app_statements')]
    public function statements(): Response
    {
        return $this->render('account/statements.html.twig', [
        ]);
    }
}
