<?php

namespace App\Repository;

use App\Entity\ludata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ludata|null find($id, $lockMode = null, $lockVersion = null)
 * @method ludata|null findOneBy(array $criteria, array $orderBy = null)
 * @method ludata[]    findAll()
 * @method ludata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ludataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ludata::class);
    }

//    /**
//     * @return ludata[] Returns an array of ludata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ludata
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
