<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Config\Doctrine\Orm;

#[Route('/burgers', name: 'burgers')]
class BurgerController extends AbstractController {
    public $titre = "Liste des Burgers";

    public $liste = [
        "BigMac", "Rond avec graines de sésames", "steak sec sa mère", "salade du bled", "sauce cancérogène", "tomate d'un autre monde"
    ];

    #[Route('/liste', name: 'liste_de_burgers')]
    public function burgerDisplay() : Response 
    {
        {
        return $this->render('liste_burger.html.twig', []);
        }
    }

}

?>