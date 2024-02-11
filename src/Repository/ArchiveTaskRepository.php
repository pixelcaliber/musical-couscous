<?php

namespace App\Repository;

use App\Entity\ArchiveTask;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArchiveTask>
 *
 * @method ArchiveTask|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArchiveTask|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArchiveTask[]    findAll()
 * @method ArchiveTask[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArchiveTaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArchiveTask::class);
    }

//    /**
//     * @return ArchiveTask[] Returns an array of ArchiveTask objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ArchiveTask
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
