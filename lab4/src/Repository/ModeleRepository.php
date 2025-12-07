<?php

namespace App\Repository;

use App\Entity\Modele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Modele>
 *
 * @method Modele|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modele|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modele[]    findAll()
 * @method Modele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modele::class);
    }

    // + CREATE
    public function addModele(string $libelle, string $pays): Modele
    {
        $em = $this->getEntityManager();
        $modele = new Modele();
        $modele->setLibelle($libelle);
        $modele->setPays($pays);

        $em->persist($modele);
        $em->flush();

        return $modele;
    }

    // + READ : Liste tous les modèles
    public function findAllModeles(): array
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(dql: '
            SELECT m
            FROM App\Entity\Modele m
            ORDER BY m.libelle ASC
        ');
        return $query->getResult();
    }

    // + UPDATE : Mise à jour d'un modèle
    public function updateModele(int $id, string $libelle, string $pays): int
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(dql: '
            UPDATE App\Entity\Modele m
            SET m.libelle = :libelle,
                m.pays = :pays
            WHERE m.id = :id
        ')
            ->setParameter('libelle', $libelle)
            ->setParameter('pays', $pays)
            ->setParameter('id', $id);

        return $query->execute();
    }

    // - DELETE : Suppression d'un modèle
    public function deleteModele(int $id): int
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(dql: '
            DELETE FROM App\Entity\Modele m
            WHERE m.id = :id
        ')
            ->setParameter('id', $id);

        return $query->execute();
    }
}
