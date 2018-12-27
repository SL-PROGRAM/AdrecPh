<?php

namespace App\Repository;

use App\Entity\SiteText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SiteText|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteText|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteText[]    findAll()
 * @method SiteText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteTextRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SiteText::class);
    }

    // /**
    //  * @return SiteText[] Returns an array of SiteText objects
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
    public function findOneBySomeField($value): ?SiteText
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
