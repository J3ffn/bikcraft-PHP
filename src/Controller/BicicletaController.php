<?php

namespace App\Controller;

use App\Repository\BicicletaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BicicletaController extends AbstractController
{
    public function __construct(private BicicletaRepository $bicicletaRepository)
    {
    }

    #[Route('/bicicleta', name: "app_bicicleta_list", methods: "GET")]
    public function listarBicicletas(): Response
    {
        $listaBicicletas = $this->bicicletaRepository->findAll();
        return $this->render('bicicleta/index.html.twig', [
            "listaBicicletas" => $listaBicicletas
        ]);
    }

    #[Route(
        '/bicicleta/delete/{id}',
        name: 'app_delete_bicicleta',
        methods: ['DELETE'],
        requirements: ['id' => '[0-9]+']
    )]
    public function deleteBicicleta(int $id, Request $request): Response
    {
        $this->bicicletaRepository->removeById($id);
        $this->addFlash('success', 'Bicicleta removida com sucesso');

        return new RedirectResponse('/bicicletas');
    }
}
