<?php
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class UIController extends AbstractController
{
    #[Route('/landing')]
    public function landing() : Response
    {
        return $this->render('pages/landing.html.twig', [
            "welcome_message" => "Bienvenue sur Belle Epoque"
        ]);
    }

    #[Route('/menu')]
    public function menu() : Response
    {
        return $this->render('pages/menu.html.twig', [ 
            "menu_message" => "Bienvenue sur la page du menu"
        ]);
    }


}