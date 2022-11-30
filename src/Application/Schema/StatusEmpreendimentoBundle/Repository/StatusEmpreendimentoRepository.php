<?php

namespace App\Application\Schema\StatusEmpreendimentoBundle\Repository;

use App\Application\Schema\StatusEmpreendimentoBundle\Entity\StatusEmpreendimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StatusEmpreendimento>
 *
 * @method StatusEmpreendimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatusEmpreendimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatusEmpreendimento[]    findAll()
 * @method StatusEmpreendimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatusEmpreendimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatusEmpreendimento::class);
    }


}