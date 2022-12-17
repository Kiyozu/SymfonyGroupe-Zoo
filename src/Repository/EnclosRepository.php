<?php

namespace App\Repository;

use App\Entity\Enclos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Enclos>
 *
 * @method Enclos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enclos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enclos[]    findAll()
 * @method Enclos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnclosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enclos::class);
    }

    public function add(Enclos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Enclos $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
