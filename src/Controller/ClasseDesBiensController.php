<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseDesBiensController extends AbstractController
{
    #[Route('/classedesbiens', name: 'classe_des_biens')]
    public function index(): Response
    {
        return $this->render('classe_des_biens/index.html.twig', [
            'controller_name' => 'ClasseDesBiensController',
        ]);
    }
}
