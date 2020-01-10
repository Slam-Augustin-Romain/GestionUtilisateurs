<?php

namespace App\Repository;

use App\Entity\Lv2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Lv2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lv2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lv2[]    findAll()
 * @method Lv2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Lv2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lv2::class);
    }

    // /**
    //  * @return Lv2[] Returns an array of Lv2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lv2
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
