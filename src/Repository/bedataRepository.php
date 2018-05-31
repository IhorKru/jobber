<?php

namespace App\Repository;

use App\Entity\bedata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method bedata|null find($id, $lockMode = null, $lockVersion = null)
 * @method bedata|null findOneBy(array $criteria, array $orderBy = null)
 * @method bedata[]    findAll()
 * @method bedata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class bedataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, bedata::class);
    }

//    /**
//     * @return bedata[] Returns an array of bedata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?bedata
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
