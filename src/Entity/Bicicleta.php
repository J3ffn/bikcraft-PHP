<?php

namespace App\Entity;

use App\Repository\BicicletaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BicicletaRepository::class)]
class Bicicleta
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: "id_bicicleta", type: 'integer')]
    private int $id = 4;

    public function __construct(
        #[ORM\Column(length: 60)]
        private string $nome,

        #[ORM\Column]
        private $preco,

        #[ORM\Column(length: 255)]
        private string $descricao,

        #[ORM\Column(name: "nomeImagem", length: 30)]
        private string $nomeImagem = "magic-home.jpg"
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): static
    {
        $this->preco = $preco;

        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): static
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getNomeImagem(): string
    {
        return $this->nomeImagem;
    }

    public function setNomeImagem(string $nomeImagem): static
    {
        $this->nomeImagem = $nomeImagem;

        return $this;
    }
}