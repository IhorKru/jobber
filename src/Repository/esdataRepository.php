<?php

namespace App\Repository;

use App\Entity\esdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method esdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method esdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method esdata[]    findAll()
 * @method esdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class esdataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, esdata::class);
    }

//    /**
//     * @return esdata[] Returns an array of esdata objects
//     */
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
    public function findOneBySomeField($value): ?esdata
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
