<?php

namespace App\Repository;

use App\Entity\StreetType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StreetType|null find($id, $lockMode = null, $lockVersion = null)
 * @method StreetType|null findOneBy(array $criteria, array $orderBy = null)
 * @method StreetType[]    findAll()
 * @method StreetType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StreetTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StreetType::class);
    }

    // /**
    //  * @return StreetType[] Returns an array of StreetType objects
    //  */
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
    public function findOneBySomeField($value): ?StreetType
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
