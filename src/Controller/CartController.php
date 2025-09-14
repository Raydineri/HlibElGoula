<?php



namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface; 

class CartController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function index(Request $request): Response
    {
         // Récupère la session depuis la requête
        $session = $request->getSession();
         // REcupère le panier de la session ou un tableau vide s'il n'existe pas
        $panier = $session->get('panier', []);

        $panierData = [];
        $total = 0; 
// récupérer un repository pour l'entité Produit
        $produitRepository = $this->entityManager->getRepository(Produit::class);

        foreach ($panier as $id => $quantity) {
$produit = $produitRepository->find($id);
            if ($produit) {
 $sousTotal = $produit->getPrix() * $quantity; 
 $total += $sousTotal;
 $panierData[] = [
 'id' => $id,
'nom' => $produit->getNom(),
 'prix' => $produit->getPrix(),
 'quantity' => $quantity,
'sousTotal' => $sousTotal 
  ];
   // Si le produit n'existe pas le retire du panier
            } else {
   unset($panier[$id]);
   $session->set('panier', $panier);
            }
        }

        return $this->render('cart/index.html.twig', [
            'items' => $panierData,
            'total' => $total 
        ]);
    }

    public function add($id, Request $request)
    {
        $session = $request->getSession();
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
 // Met A jour le panier dans la session
        $session->set('panier', $panier);
        return $this->redirectToRoute('cart');
    }
}