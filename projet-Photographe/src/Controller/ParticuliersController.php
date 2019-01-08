<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
     */
    public function index()
    {
        return $this->render('particuliers/index.html.twig', [
            'controller_name' => 'ParticuliersController',
        ]);
    }
}
