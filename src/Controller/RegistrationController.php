<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $encoder->hashPassword($user, $form->get('password')->getData())
            );

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('connexion');
        }

        return $this->render('registration/inscription.html.twig', [
            'form' => $form->createView()
        ]);
    }
    #[Route('/connexion', name: 'connexion')]
    public function login()
    {
        return $this->render('registration/connexion.html.twig');
    }

    #[Route('/deconnexion', name: 'deconnexion')]
    public function logout()
    {
    }
    #[Route('/profil', name: 'profil')]
    public function profil()
    {
        return $this->render('registration/profil.html.twig');
    }
}
