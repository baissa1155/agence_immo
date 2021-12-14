<?php

namespace App\Repository;

use App\Entity\TypesLogements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypesLogements|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypesLogements|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypesLogements[]    findAll()
 * @method TypesLogements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypesLogementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypesLogements::class);
    }

    // /**
    //  * @return TypesLogements[] Returns an array of TypesLogements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypesLogements
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
