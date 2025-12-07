<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'app_etudiant')]
    public function index(): Response
    {
        // Ajoutez les données ici aussi
        $etudiants = array("ali", "med", "islem");
        $modules = array(
            array(
                "nom" => "Symfony",
                "id" => 1,
                "enseignant" => "Ali",
                "nbrHeures" => 42,
                "date" => "12-12-2021"
            ),
            array(
                "nom" => "JEE",
                "id" => 2,
                "enseignant" => "Med",
                "nbrHeures" => 31,
                "date" => "12-10-2021"
            ),
            array(
                "nom" => "BD",
                "id" => 3,
                "enseignant" => "Islem",
                "nbrHeures" => 21,
                "date" => "12-09-2021"
            )
        );

        return $this->render('etudiant/list.html.twig', [
            'etudiants' => $etudiants,
            'listeModules' => $modules
        ]);
    }

    #[Route('/list', name: 'list_etudiant')]
    public function list_etudiant(): Response
    {
        $etudiants = array("ali", "med", "islem");
        $modules = array(
            array(
                "nom" => "Symfony",
                "id" => 1,
                "enseignant" => "Ali",
                "nbrHeures" => 42,
                "date" => "12-12-2021"
            ),
            array(
                "nom" => "JEE",
                "id" => 2,
                "enseignant" => "Med",
                "nbrHeures" => 31,
                "date" => "12-10-2021"
            ),
            array(
                "nom" => "BD",
                "id" => 3,
                "enseignant" => "Islem",
                "nbrHeures" => 21,
                "date" => "12-09-2021"
            )
        );

        return $this->render('etudiant/list.html.twig', [
            'etudiants' => $etudiants,
            'listeModules' => $modules
        ]);
    }

    #[Route('/affectation', name: 'affectation')]
    public function affecter(): Response
    {
        return $this->render('etudiant/affecter.html.twig');
    }

    #[Route('/indexFils', name: 'indexfils')]
    public function indexFils(): Response
    {
        $etudiants = array("ali", "med", "islem");
        $modules = array(
            array(
                "nom" => "Symfony",
                "id" => 1,
                "enseignant" => "Ali",
                "nbrHeures" => 42,
                "date" => "12-12-2021"
            ),
            array(
                "nom" => "JEE",
                "id" => 2,
                "enseignant" => "Med",
                "nbrHeures" => 31,
                "date" => "12-10-2021"
            ),
            array(
                "nom" => "BD",
                "id" => 3,
                "enseignant" => "Islem",
                "nbrHeures" => 21,
                "date" => "12-09-2021"
            )
        );
        
        return $this->render('etudiant/index.html.twig', [
            'etudiants' => $etudiants,
            'listeModules' => $modules
        ]);
    }
}