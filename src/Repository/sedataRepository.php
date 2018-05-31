<?php

namespace App\Repository;

use App\Entity\sedata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method sedata|null find($id, $lockMode = null, $lockVersion = null)
 * @method sedata|null findOneBy(array $criteria, array $orderBy = null)
 * @method sedata[]    findAll()
 * @method sedata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class sedataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, sedata::class);
    }

//    /**
//     * @return sedata[] Returns an array of sedata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?sedata
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
