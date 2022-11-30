<?php

namespace App\Application\Schema\TopicoBundle\Entity;

use App\Application\Schema\TopicoBundle\Repository\TopicoRepository;
use App\Application\Schema\PerguntaFrequenteBundle\Entity\PerguntaFrequente;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/** Info:  */
#[ORM\Table(name: 'topico')]
#[ORM\Entity(repositoryClass: TopicoRepository::class)]
#[UniqueEntity('id')]
class Topico
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer', unique: true, nullable: false)]
    private ?int $id = null;

    #[Assert\NotNull]
    #[Assert\NotBlank]
    #[ORM\Column(name: 'nome', type: 'string', unique: false, nullable: false)]
    private string $nome;

    #[ORM\Column(name: 'descricao', type: 'text', unique: false, nullable: true)]
    private ?string $descricao = null;

    #[ORM\OneToMany(mappedBy: 'topico', targetEntity: PerguntaFrequente::class)]
    private Collection $perguntaFrequentes;


    public function __construct()
    {
        $this->perguntaFrequentes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPerguntaFrequentes(): Collection
    {
        return $this->perguntaFrequentes;
    }

    public function setPerguntaFrequentes(Collection $perguntaFrequentes): void
    {
        $this->perguntaFrequentes = $perguntaFrequentes;
    }



}