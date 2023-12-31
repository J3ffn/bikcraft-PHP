<?php

namespace App\Repository;

use App\Entity\Bicicleta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Bicicleta>
 *
 * @method Bicicleta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bicicleta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bicicleta[]    findAll()
 * @method Bicicleta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BicicletaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bicicleta::class);
    }

    public function add(Bicicleta $bicicleta, bool $flush = false): void
    {
        $this->getEntityManager()->persist($bicicleta);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Bicicleta $bicicleta, bool $flush = false): void
    {
        $this->getEntityManager()->remove($bicicleta);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function removeById(int $idBicicleta): void
    {
        $Bicicleta = $this->getEntityManager()->getPartialReference(Bicicleta::class, $idBicicleta);
        $this->remove($Bicicleta, true);
    }

//    /**
//     * @return Bicicleta[] Returns an array of Bicicleta objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Bicicleta
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
