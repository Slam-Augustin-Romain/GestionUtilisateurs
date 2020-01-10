<?php

namespace App\Repository;

use App\Entity\TypeFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TypeFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeFormation[]    findAll()
 * @method TypeFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeFormation::class);
    }

    // /**
    //  * @return TypeFormation[] Returns an array of TypeFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeFormation
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
