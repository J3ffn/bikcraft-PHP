<?php

namespace App\Controller;

use App\Entity\Bicicleta;
use App\Repository\BicicletaRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BicicletaController extends AbstractController
{

    public function __construct(
        private BicicletaRepository $bicicletaRepository,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/bicicleta', name: "app_bicicleta_listar", methods: "GET")]
    public function bicicletaIndex(): Response
    {
        return $this->render('bicicleta/index.html.twig', [
            'controller_name' => 'BicicletaController',
        ]);
    }

    #[Route('/bicicleta/admin', name: "app_bicicleta_form", methods: "GET")]
    public function bicicletasAdmin(): Response
    {
        $listaBicicletas = $this->bicicletaRepository->findAll();

        return $this->render('bicicleta/admin.html.twig', [
            "listaBicicletas" => $listaBicicletas
        ]);
    }

    #[Route("/bicicleta/main", name: "app_bicicleta_adicionar_form", methods: "GET")]
    public function bicicletaAdicionarForm(): Response
    {
        return $this->render('bicicleta/form.html.twig');
    }

    #[Route('/bicicleta', name: "app_bicicleta_list", methods: "GET")]
    public function listarBicicletas(): Response
    {
        return $this->bicicletaRepository->findAll();
    }

    #[Route("/bicicleta/admin/adicionar", name: "app_bicicleta_adicionar", methods: "POST")]
    public function adicionarbicicleta(Request $request): Response
    {
        $nome = $request->request->get("nome");
        $preco = $request->request->get("preco");
        $descricao = $request->request->get("descricao");

        $bicicleta = new Bicicleta($nome, $preco, $descricao);

        $this->bicicletaRepository->add($bicicleta, true);

        return new RedirectResponse("/bicicleta/admin");
    }

    #[Route("/bicicleta/admin/{bicicleta}", name: "app_bicicleta_editar_form", methods: "GET")]
    public function editarBicicletaForm(Bicicleta $bicicleta): Response
    {
        return $this->render("bicicleta/form.html.twig", ["bicicleta" => $bicicleta]);
    }

    #[Route("/bicicleta/admin/edit/{bicicleta}", name: "app_bicicleta_editar", methods: "POST")]
    public function editarBicicleta(Bicicleta $bicicleta, Request $request): Response
    {
        $bicicleta->setNome($request->request->get("nome"));
        $bicicleta->setPreco($request->request->get("preco"));
        $bicicleta->setDescricao($request->request->get("descricao"));

        $this->entityManager->flush();

        return new RedirectResponse('/bicicleta/admin');
    }

    #[Route('/bicicleta/admin/delete/{id}', name: 'app_delete_bicicleta', methods: 'DELETE',  requirements: ['id' => '[0-9]+'])]
    public function deletarBicicleta(int $id, Request $request): Response
    {
        $this->bicicletaRepository->removeById($id);
        $this->addFlash('success', 'Bicicleta removida com sucesso');

        return new RedirectResponse('/bicicleta/admin');
    }
}
