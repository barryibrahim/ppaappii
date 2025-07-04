<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\TypeBatterieType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\TypeBatterie;
use Doctrine\ORM\EntityManagerInterface;


final class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', []);
    }
    #[Route('/typebatterie', name: 'app_typebatterie')]
    public function typebatterie(Request $request, EntityManagerInterface $em): Response
    {
        $TypeBatterie = new TypeBatterie();
        $form = $this->createForm(TypeBatterieType::class,$TypeBatterie);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em->persist($TypeBatterie);
                $em->flush();
                $this->addFlash('notice', 'Message envoyé');
                return $this->redirectToRoute('app_typebatterie');
            }
        }
        return $this->render('base/typebatterie.html.twig', [
            'form' => $form->createView()
        ]);
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
