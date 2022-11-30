<?php

namespace App\Application\Schema\BlocoBundle\Repository;

use App\Application\Schema\BlocoBundle\Entity\Bloco;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bloco>
 *
 * @method Bloco|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bloco|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bloco[]    findAll()
 * @method Bloco[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlocoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bloco::class);
    }


}