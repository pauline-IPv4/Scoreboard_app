<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;
use App\Entity\Game;
use App\Form\GameType;
use Doctrine\ORM\EntityManagerInterface;

class GameController extends AbstractController
{
    #[Route('/admin/game', name: 'app_admin_game')]
    public function index(GameRepository $gameRepository): Response
    {
        return $this->render('admin/game/index.html.twig', [
            'games' => $gameRepository->findAll()
        ]);
    }

    #[Route('/admin/game/new', name: 'app_admin_game_new')]
    public function new(Request $request, EntityManagerInterface $em){

        $jeu = new Game;

        $form = $this->createForm(GameType::class, $jeu);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em->persist($jeu); 
            $em->flush(); 
            return $this->redirectToRoute("app_admin_game"); 
 
        }   
        return $this->render("admin/game/form.html.twig",[
            "formGame" => $form->createView()
        ]);
    }
    
    #[Route('/admin/game/edit/{id}', name: 'app_admin_game_edit')]
    public function edit(Request $rq, EntityManagerInterface $em, GameRepository $gameRepository, $id){
        $jeu = $gameRepository->find($id);
        $form = $this->createForm(GameType::class, $jeu);
        $form->handleRequest($rq);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            return $this->redirectToRoute("app_admin_game");
        }
        return $this->render("admin/game/form.html.twig", ["formGame" => $form->createView()]);
    }

    #[Route('/admin/game/modify/{title}', name: 'app_admin_game_modify')]
    public function modify(Request $rq, EntityManagerInterface $em, Game $jeu)
    {
        // $jeu = $gameRepository->find($id);
        $form = $this->createForm(GameType::class, $jeu);
        $form->handleRequest($rq);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute("app_admin_game");
        }

        return $this->render("admin/game/form.html.twig", ["formGame" => $form->createView()]);
    }

    #[Route('/admin/game/delete/{id}', name: 'app_admin_game_delete')]
    public function delete($id, GameRepository $gr, Request $rq, EntityManagerInterface $em): Response{
        $jeu = $gr->find($id);
        if($rq->isMethod("POST")){
            $em->remove($jeu);
            $em->flush();
            return $this->redirectToRoute("app_admin_game");
        }
        return $this->render("admin/game/delete.html.twig", ["game" => $jeu]);
    }
}
