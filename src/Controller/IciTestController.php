<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IciTestController extends AbstractController
{
    #[Route('/ici/test', name: 'app_ici_test')]
    public function index(): Response 
    {
        return $this->render('ici_test/index.html.twig', [
            'controller_name' => 'IciTestController',
            'texte' => 'le texte que je veux afficher',
        ]);
    }

    #[Route('/test/calcul', name: 'app_test_calcul')]
    public function calcul(): Response
    {
        $a = 12;
        $b = 7;
        return $this->render('ici_test/index.html.twig', [
            'controller_name' => 'IciTestController',
            'texte' => 'le texte que je veux afficher',
            'calcul' => $a + $b,
        ]);
    }

    #[Route('/test/salut', name: 'app_test_salut')]
    public function salut()
    {
        return $this->render('ici_test/salut.html.twig', [
            'prenom' => 'Pauline'
        ]);
    }

    #[Route('/test/array')]
    public function array()
    {
        $array=["bonjour", "je m'appelle", 666, true, 12, 38];
        return $this->render('ici_test/array.html.twig', ["array"=>$array]);
    }

    #[Route('/test/assoc')]
    public function tab()
    {
        $tab=[
            "nom" => "Cérien",
            "prenom" => "Jean",
            "age" => 32];
        return $this->render('ici_test/assoc.html.twig', ["personne"=>$tab]);
    }

    #[Route('/test/object')]
    public function object()
    {
        $object = new \stdClass;
        $object->prenom = "Nordine";
        $object->nom = "Ateur";
        $object->age = 40;
        return $this->render('ici_test/assoc.html.twig', ["personne"=>$object]);
    }
}
