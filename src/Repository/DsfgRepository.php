<?php

namespace App\Repository;

use App\Entity\Dsfg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dsfg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dsfg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dsfg[]    findAll()
 * @method Dsfg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DsfgRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dsfg::class);
    }

//    /**
//     * @return Dsfg[] Returns an array of Dsfg objects
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
    public function findOneBySomeField($value): ?Dsfg
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
