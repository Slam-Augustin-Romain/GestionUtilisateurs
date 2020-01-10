<?php

namespace App\Repository;

use App\Entity\HomeInstitution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HomeInstitution|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeInstitution|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeInstitution[]    findAll()
 * @method HomeInstitution[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeInstitutionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeInstitution::class);
    }

    // /**
    //  * @return HomeInstitution[] Returns an array of HomeInstitution objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomeInstitution
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
