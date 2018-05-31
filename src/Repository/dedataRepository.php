<?php

namespace App\Repository;

use App\Entity\dedata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method dedata|null find($id, $lockMode = null, $lockVersion = null)
 * @method dedata|null findOneBy(array $criteria, array $orderBy = null)
 * @method dedata[]    findAll()
 * @method dedata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class dedataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, dedata::class);
    }

//    /**
//     * @return dedata[] Returns an array of dedata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?dedata
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
