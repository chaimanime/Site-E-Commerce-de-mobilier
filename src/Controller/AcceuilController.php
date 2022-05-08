<?php

namespace App\Controller;
use App\Repository\ProductsRepository;
use App\Repository\CompteRepository;
use App\Entity\Products;
use App\Entity\Contact;
use App\Entity\Subscribtion;
use App\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/", name="acceuil")
     */
 
    public function index(ProductsRepository $productsRepository)
    {
        return $this->render('acceuil/index.html.twig', [
            'products' => $productsRepository->findAll()
        ]);
    }


    /**
     * @Route("/acceuiladmin", name="acceuiladmin")
     */
 
    public function acceuiladmin(ProductsRepository $productsRepository)
    {
        return $this->render('acceuil/acceuiladmin.html.twig', [
            'products' => $productsRepository->findAll()
        ]);
    }



    /**
     * @Route("/acceuiluser", name="acceuiluser")
     */
 
    public function acceuiluser(ProductsRepository $productsRepository)
    {
        return $this->render('acceuil/acceuiluser.html.twig', [
            'products' => $productsRepository->findAll()
        ]);
    }

     /**
     * @Route("/product", name="product")
     */
 
    public function product(ProductsRepository $productsRepository)
    {
        return $this->render('acceuil/product.html.twig', [
            'products' => $productsRepository->findAll()
        ]);
    }

     /**
     * @Route("/aboutus", name="aboutus")
     */
 
    public function aboutus()
    {
        return $this->render('acceuil/about.html.twig');
    }
    
    /**
     * @Route("/contactus", name="contactus")
     */
 
    public function contactus()
    {
        return $this->render('acceuil/contact.html.twig');
    }



   

     /**
     * @Route("/aboutuser", name="aboutususer")
     */
 
    public function aboutususer()
    {
        return $this->render('acceuil/aboutuser.html.twig');
    }
    
    /**
     * @Route("/contactuser", name="contactususer")
     */
 
    public function contactususer()
    {
        return $this->render('acceuil/contactuser.html.twig');
    }

    /**
     * @Route("/indexuser", name="indexuser")
     */
 
    public function indexuser(ProductsRepository $productsRepository)
    {
        return $this->render('acceuil/indexuser.html.twig', [
            'products' => $productsRepository->findAll()
        ]);
    }
     
     /**
     * @Route("/add", name="add")
     */
    public function add(Request $request): Response
    {

        $fname = $request->request->get('fname');
        $lname = $request->request->get('lname');
        $email = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $entitymanager = $this->getDoctrine()->getManager();
        $client = new Contact();
        $client->setFname($fname);
        $client->setLname($lname);
        $client->setEmail($email);
        $client->setSubject($subject);
        $client->setMessage($message);


        $entitymanager->persist($client);
        $entitymanager->flush();

       
        return $this->render('acceuil/contact.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }

     /**
     * @Route("/subs", name="subs")
     */
    public function subs(Request $request): Response
    {

        $email= $request->request->get('email');
  

        $entitymanager = $this->getDoctrine()->getManager();
        $client = new Subscribtion();
        $client->setEmail($email);
 


        $entitymanager->persist($client);
        $entitymanager->flush();

       
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }

}
