<?php

namespace App\Repository;

use App\Entity\EnseignementComp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EnseignementComp|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnseignementComp|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnseignementComp[]    findAll()
 * @method EnseignementComp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnseignementCompRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EnseignementComp::class);
    }

    // /**
    //  * @return EnseignementComp[] Returns an array of EnseignementComp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnseignementComp
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
