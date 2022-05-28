<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;
use App\Repository\PlayerRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Game;
use App\Entity\Contest;
use App\Form\CommencerPartieType;

class HomeController extends AbstractController
{
    
    #[Route('/', name: 'app_home')]
    public function displayGame(GameRepository $gameRepository, PlayerRepository $playerRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'games' => $gameRepository->findAll(),
            'nb_players' => count($playerRepository->findAll()),
            'winners' => $playerRepository->findWinners()
        ]);
    }

    #[Route('/commencer-une-partie-{title}', name: 'app_home_contest')]
    public function commencer(Game $jeu, EntityManagerInterface $em, Request $rq)
    {
      $partie = new Contest;
      $partie->setGame($jeu);
      $form = $this->createForm(CommencerPartieType::class, $partie);
      $form->handleRequest($rq);
      if($form->isSubmitted() && $form->isValid()){
        $em->persist($partie);
        $em->flush();
        $this->addFlash("success", "La nouvelle partie a bien été enregistrée");
        return $this->redirectToRoute("app_home");
      }
      return $this->render("home\commencer.html.twig", [
          "form" => $form->createView()
      ]);
    }
}
