<?php

namespace App\Repository;

use App\Entity\ukdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ukdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method ukdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method ukdata[]    findAll()
 * @method ukdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ukdataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ukdata::class);
    }

//    /**
//     * @return ukdata[] Returns an array of ukdata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ukdata
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
