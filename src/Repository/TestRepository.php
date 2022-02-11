<?php

namespace App\Repository;
use App\Entity\Test;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 *
 *
 */
class TestRepository extends ServiceEntityRepository
{
    /**
     * @method Test|null find($id, $lockMode = null, $lockVersion = null)
     * @method Test|null findOneBy(array $criteria, array $orderBy = null)
     * @method Test[]    findAll()
     * @method Test[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Test::class);
    }
}