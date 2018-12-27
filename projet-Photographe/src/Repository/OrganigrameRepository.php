<?php

namespace App\Repository;

use App\Entity\Organigrame;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Organigrame|null find($id, $lockMode = null, $lockVersion = null)
 * @method Organigrame|null findOneBy(array $criteria, array $orderBy = null)
 * @method Organigrame[]    findAll()
 * @method Organigrame[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganigrameRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Organigrame::class);
    }

    // /**
    //  * @return Organigrame[] Returns an array of Organigrame objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Organigrame
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
