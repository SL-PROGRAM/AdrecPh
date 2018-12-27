<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionPhotographeController extends AbstractController
{
    /**
     * @Route("/gestion/photographe", name="gestion_photographe")
     */
    public function index()
    {
        return $this->render('gestion_photographe/index.html.twig', [
            'controller_name' => 'GestionPhotographeController',
        ]);
    }
}
