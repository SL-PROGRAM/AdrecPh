<?php

namespace App\Repository;

use App\Entity\LivreDOr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LivreDOr|null find($id, $lockMode = null, $lockVersion = null)
 * @method LivreDOr|null findOneBy(array $criteria, array $orderBy = null)
 * @method LivreDOr[]    findAll()
 * @method LivreDOr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivreDOrRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LivreDOr::class);
    }

    // /**
    //  * @return LivreDOr[] Returns an array of LivreDOr objects
    //  */
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
    public function findOneBySomeField($value): ?LivreDOr
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
