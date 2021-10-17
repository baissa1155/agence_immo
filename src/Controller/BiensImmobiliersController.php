<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BiensImmobiliersController extends AbstractController
{
    #[Route('/biens/immobiliers', name: 'biens_immobiliers')]
    public function index(): Response
    {
        return $this->render('biens_immobiliers/index.html.twig', [
            'controller_name' => 'BiensImmobiliersController',
        ]);
    }
}
