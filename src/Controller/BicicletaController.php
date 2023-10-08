<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BicicletaController extends AbstractController
{
    #[Route('/bicicleta')]
    public function index(): Response
    {
        return $this->render('bicicleta/index.html.twig', [
            'controller_name' => 'BicicletaController',
        ]);
    }
}
