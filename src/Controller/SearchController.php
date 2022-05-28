<?php

namespace App\Controller;

use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]

    public function index(Request $rq, GameRepository $gr): Response
    {
        $keyword=$rq->query->get("search");
        $jeux=$gr->findBySearch($keyword); 
        return $this->render('search/index.html.twig', [
            'jeux' => $jeux,
            'keyword' => $keyword,
        ]);
    }
}

