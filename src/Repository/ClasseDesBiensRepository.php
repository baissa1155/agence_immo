<?php

namespace App\Repository;

use App\Entity\ClasseDesBiens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClasseDesBiens|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClasseDesBiens|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClasseDesBiens[]    findAll()
 * @method ClasseDesBiens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseDesBiensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClasseDesBiens::class);
    }

    // /**
    //  * @return ClasseDesBiens[] Returns an array of ClasseDesBiens objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClasseDesBiens
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
