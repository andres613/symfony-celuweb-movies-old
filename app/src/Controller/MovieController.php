<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Movie;
use App\Entity\User;

class MovieController extends AbstractController
{
    /**
     * @Route("/movie", name="app_movie")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        /* $userRepository = $this->getDoctrine()->getRepository(User::class); */

        /* $users = $userRepository->findAll(); */

        /* foreach ($users as $user) { */
        /*     echo $user->getUserName()."<br/>"; */
        /* } */

        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $users = $userRepository->findAll();

        foreach ($users as $user) {
            echo "<h1>{$user->getUserName()}</h1>";

            foreach ($user->getMovies() as $movie) {
                echo $movie->getTitle()."<br/>";
            }
        }


        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }
}
