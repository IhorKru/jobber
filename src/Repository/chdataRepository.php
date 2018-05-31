<?php

namespace App\Repository;

use App\Entity\chdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method chdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method chdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method chdata[]    findAll()
 * @method chdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class chdataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, chdata::class);
    }

//    /**
//     * @return chdata[] Returns an array of chdata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?chdata
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
