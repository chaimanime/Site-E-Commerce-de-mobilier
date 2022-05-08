<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;




class ProductsController extends AbstractController
{


      /**
     * @Route("/article", name="product_index1")
     */
    public function index(ProductsRepository $productsRepository)
    {
        return $this->render('acceuil/acceuiluser.html.twig', [
            'products' => $productsRepository->findAll()
        ]);
    }

     

}
