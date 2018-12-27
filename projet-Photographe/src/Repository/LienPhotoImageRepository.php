<?php

namespace App\Repository;

use App\Entity\LienPhotoImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LienPhotoImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method LienPhotoImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method LienPhotoImage[]    findAll()
 * @method LienPhotoImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LienPhotoImageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LienPhotoImage::class);
    }

    // /**
    //  * @return LienPhotoImage[] Returns an array of LienPhotoImage objects
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
    public function findOneBySomeField($value): ?LienPhotoImage
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
