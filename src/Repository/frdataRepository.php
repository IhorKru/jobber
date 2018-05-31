<?php

namespace App\Repository;

use App\Entity\frdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method frdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method frdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method frdata[]    findAll()
 * @method frdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class frdataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, frdata::class);
    }

//    /**
//     * @return frdata[] Returns an array of frdata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?frdata
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
