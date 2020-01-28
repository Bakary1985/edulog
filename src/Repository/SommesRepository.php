<?php

namespace App\Repository;

use App\Entity\Sommes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Sommes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sommes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sommes[]    findAll()
 * @method Sommes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SommesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sommes::class);
    }

    // /**
    //  * @return Sommes[] Returns an array of Sommes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sommes
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
