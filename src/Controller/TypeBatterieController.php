<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TypeBatterieRepository;

final class TypeBatterieController extends AbstractController
{
    #[Route('/liste-typebatteries', name: 'app_liste_typebatteries')]
    public function listeTypeBatteries(TypeBatterieRepository $TypeBatterieRepository): Response
    {
        $typebatteries = $TypeBatterieRepository->findAll();
        return $this->render('type_batterie/liste-typebatterie.html.twig', [
            'typebatteries' => $typebatteries
        ]);
    }
}
