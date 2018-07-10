<?php

namespace App\Repository;

use App\Entity\Berger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Berger|null find($id, $lockMode = null, $lockVersion = null)
 * @method Berger|null findOneBy(array $criteria, array $orderBy = null)
 * @method Berger[]    findAll()
 * @method Berger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BergerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Berger::class);
    }

//    /**
//     * @return Berger[] Returns an array of Berger objects
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
    public function findOneBySomeField($value): ?Berger
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
