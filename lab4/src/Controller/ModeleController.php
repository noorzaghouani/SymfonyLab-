<?php

namespace App\Controller;

use App\Repository\ModeleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/modeles')]
final class ModeleController extends AbstractController
{
    // + CREATE : ajout direct d'un modèle
    #[Route('/add/{libelle}/{pays}', name: 'modele_add')]
    public function add(ModeleRepository $repo, string $libelle = 'Clio', string $pays = 'France'): Response
    {
        $modele = $repo->addModele(libelle: $libelle, pays: $pays);

        return new Response(content: 'Modèle ajouté avec ID : ' . $modele->getId() . ' - ' . $libelle . ' (' . $pays . ')');
    }


    #[Route('/list', name: 'modele_list')]
    public function list(ModeleRepository $repo): Response
    {
        $modeles = $repo->findAllModeles();

        $output = '<h2>Liste des modèles</h2><ul>';

        foreach ($modeles as $m) {
            $output .= '<li>ID: ' . $m->getId() . ' | Libellé: ' . $m->getLibelle() . ' | Pays: ' . $m->getPays() . '</li>';
        }

        $output .= '</ul>';

        return new Response($output);
    }

    //  UPDATE : Mise à jour d'un modèle
    #[Route('/update/{id}', name: 'modele_update')]
    public function update(ModeleRepository $repo, int $id): Response
    {
        // Mise à jour du libellé et du pays
        $rows = $repo->updateModele($id, libelle: 'Megane', pays: 'France');

        return new Response(content: " Modèle mis à jour : {$rows} ligne(s).");
    }

    //  DELETE : Suppression d'un modèle
    #[Route('/delete/{id}', name: 'modele_delete')]
    public function delete(ModeleRepository $repo, int $id): Response
    {
        $rows = $repo->deleteModele($id);

        return new Response(content: " Modèle supprimé : {$rows} ligne(s).");
    }
}
