<?php

namespace App\Controller\Admin;
use App\Entity\User;
use App\Entity\Products;
use App\Entity\Contact;
use App\Entity\Subscribtion;
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
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Vente des meubles');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Meubles', 'fa fa-couch', Products::class);
        yield MenuItem::linkToCrud('Contacts', 'fa fa-phone', Contact::class);
        yield MenuItem::linkToCrud('Subscribtion', 'fa fa-envelope', Subscribtion::class);
        yield MenuItem::linkToCrud('Users', 'fa fa-user', User::class);
        
        
    }





    
}
