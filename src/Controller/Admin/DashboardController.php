<?php

namespace App\Controller\Admin;

use App\Entity\BiensImmobiliers;
use App\Entity\ClasseDesBiens;
use App\Entity\Client;
use App\Entity\Proprietaire;
use App\Entity\Quartier;
use App\Entity\TypesLogements;
use App\Entity\User;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    /**
     * @Route("admin/users", name="users")
     */
    public function usersList(UserRepository $users)
    {
        return $this->render('admin/users.html.twig', [
            'users' => $users->findAll()
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SN Agence Immobiliere');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Client', 'fas fa-user', Client::class);
        yield MenuItem::linkToCrud('Proprietaire', 'fas fa-user-circle', Proprietaire::class);
        yield MenuItem::linkToCrud('Biens Immobiliers', 'fas fa-building', BiensImmobiliers::class);
        yield MenuItem::linkToCrud('Classe des biens', 'fas fa-list', ClasseDesBiens::class);
        yield MenuItem::linkToCrud('Types de Logements', 'fas fa-bars', TypesLogements::class);
        yield MenuItem::linkToCrud('Quartier ', 'fa fa-address-card', Quartier::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class);
    }
}
