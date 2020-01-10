<?php

namespace App\Repository;

use App\Entity\EtablissementOrigine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EtablissementOrigine|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtablissementOrigine|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtablissementOrigine[]    findAll()
 * @method EtablissementOrigine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtablissementOrigineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtablissementOrigine::class);
    }

    // /**
    //  * @return EtablissementOrigine[] Returns an array of EtablissementOrigine objects
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
    public function findOneBySomeField($value): ?EtablissementOrigine
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
