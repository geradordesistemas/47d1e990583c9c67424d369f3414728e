<?php

namespace App\Application\Schema\UnidadeBundle\Repository;

use App\Application\Schema\UnidadeBundle\Entity\Unidade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Unidade>
 *
 * @method Unidade|null find($id, $lockMode = null, $lockVersion = null)
 * @method Unidade|null findOneBy(array $criteria, array $orderBy = null)
 * @method Unidade[]    findAll()
 * @method Unidade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnidadeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Unidade::class);
    }


}