<?php

namespace App\Repository;

use App\Entity\BiensImmobiliers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BiensImmobiliers|null find($id, $lockMode = null, $lockVersion = null)
 * @method BiensImmobiliers|null findOneBy(array $criteria, array $orderBy = null)
 * @method BiensImmobiliers[]    findAll()
 * @method BiensImmobiliers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiensImmobiliersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BiensImmobiliers::class);
    }

    // /**
    //  * @return BiensImmobiliers[] Returns an array of BiensImmobiliers objects
    //  */
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
    public function findOneBySomeField($value): ?BiensImmobiliers
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
