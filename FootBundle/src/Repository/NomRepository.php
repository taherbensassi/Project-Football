<?php

namespace App\Repository;

use App\Entity\Nom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nom[]    findAll()
 * @method Nom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nom::class);
    }

    // /**
    //  * @return Nom[] Returns an array of Nom objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nom
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
