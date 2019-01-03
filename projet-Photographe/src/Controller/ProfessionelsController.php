<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionelsController extends AbstractController
{
    /**
     * @Route("/professionels", name="professionels")
     */
    public function index()
    {
        return $this->render('professionels/index.html.twig', [
            'controller_name' => 'ProfessionelsController',
            'affichage' => 'bépeptaln,danctntNTLIÊNLTNTDi',
        ]);
    }
}
