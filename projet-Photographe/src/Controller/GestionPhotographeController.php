<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GestionPhotographeController extends AbstractController
{
    /**
     * @Route("/gestionphotographe", name="gestion_photographe")
     */
    public function new()
    {


        return $this->render('gestion_photographe/index.html.twig', [
            'controller_name' => 'GestionPhotographeController',
        ]);
    }
}
