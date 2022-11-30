<?php

namespace App\Application\Schema\EmpreendimentoBundle\Entity;

use App\Application\Schema\EmpreendimentoBundle\Repository\EmpreendimentoRepository;
use App\Application\Schema\StatusEmpreendimentoBundle\Entity\StatusEmpreendimento;
use App\Application\Schema\BlocoBundle\Entity\Bloco;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/** Info:  */
#[ORM\Table(name: 'empreendimento')]
#[ORM\Entity(repositoryClass: EmpreendimentoRepository::class)]
#[UniqueEntity('id')]
class Empreendimento
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

    #[ORM\Column(name: 'visivel', type: 'boolean', unique: false, nullable: true)]
    private ?bool $visivel = null;

    #[ORM\ManyToOne(targetEntity: StatusEmpreendimento::class)]
    #[ORM\JoinColumn(name: 'status_id', referencedColumnName: 'id', onDelete: 'SET NULL')]
    private StatusEmpreendimento|null $status = null;

    #[ORM\OneToMany(mappedBy: 'empreendimento', targetEntity: Bloco::class)]
    private Collection $blocos;


    public function __construct()
    {
        $this->blocos = new ArrayCollection();
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

    public function getVisivel(): ?bool
    {
        return $this->visivel;
    }

    public function setVisivel(?bool $visivel): void
    {
        $this->visivel = $visivel;
    }

    public function getStatus(): ?StatusEmpreendimento
    {
        return $this->status;
    }

    public function setStatus(?StatusEmpreendimento $status): void
    {
        $this->status = $status;
    }


    public function getBlocos(): Collection
    {
        return $this->blocos;
    }

    public function setBlocos(Collection $blocos): void
    {
        $this->blocos = $blocos;
    }



}