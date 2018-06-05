<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

use App\Entity\Movie;

/**
 * @Rest\RouteResource("movies")
 */

class MovieControlerController extends FOSRestController
{
    /**
     * @Rest\Get("/movies", name="get_movies")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $movies = $em->getRepository(Movie::class)->findAll();

        return $this->json(['data' => $movies]);
    }
}
