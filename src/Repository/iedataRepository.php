<?php

namespace App\Repository;

use App\Entity\iedata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method iedata|null find($id, $lockMode = null, $lockVersion = null)
 * @method iedata|null findOneBy(array $criteria, array $orderBy = null)
 * @method iedata[]    findAll()
 * @method iedata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class iedataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, iedata::class);
    }

//    /**
//     * @return iedata[] Returns an array of iedata objects
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
    public function findOneBySomeField($value): ?iedata
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
