<?php

namespace App\Repository;

use App\Entity\nldata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method nldata|null find($id, $lockMode = null, $lockVersion = null)
 * @method nldata|null findOneBy(array $criteria, array $orderBy = null)
 * @method nldata[]    findAll()
 * @method nldata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class nldataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, nldata::class);
    }

//    /**
//     * @return nldata[] Returns an array of nldata objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?nldata
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
