<?php

namespace App\Repository;

use App\Entity\ExpCdr011;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExpCdr011>
 *
 * @method ExpCdr011|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpCdr011|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpCdr011[]    findAll()
 * @method ExpCdr011[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpCdr011Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExpCdr011::class);
    }

    public function add(ExpCdr011 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ExpCdr011 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return ExpCdr011[] Returns an array of ExpCdr011 objects
     */
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.callingpartynumber = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }
    public function findBytype($value1): array
    {
        return $this->createQueryBuilder('e')
            
            ->andWhere('e.callingpartynumber = :val1')
            ->setParameter('val1', $value1 )
            ->getQuery()
            ->getResult()
           
        ;
    }

//    public function findOneBySomeField($value): ?ExpCdr011
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
