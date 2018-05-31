<?php

namespace App\Repository;

use App\Entity\itdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method itdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method itdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method itdata[]    findAll()
 * @method itdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class itdataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, itdata::class);
    }

//    /**
//     * @return itdata[] Returns an array of itdata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?itdata
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
