<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use Doctrine\Persistence\ManagerRegistry;

class AfficheProduitController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    
    #[Route('/produit_index', name: 'affiche_produit_index')]

    
    public function index(): Response
    {
        $articles = $this->doctrine->getRepository(Produit::class)->findAll();
    
        return $this->render('affiche_produit/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
