<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', []);
    }
    #[Route('/typebatterie', name: 'app_typebatterie')]
    public function typebatterie(): Response
    {
        return $this->render('base/typebatterie.html.twig', []);
    }
    #[Route('/mentions', name: 'app_mentions')]
    public function mentions(): Response
    {
        return $this->render('base/mentions.html.twig', []);
    }
    #[Route('/propos', name: 'app_propos')]
    public function propos(): Response
    {
        return $this->render('base/propos.html.twig', []);
    }
}
