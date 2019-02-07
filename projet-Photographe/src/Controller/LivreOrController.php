<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LivreOrController extends AbstractController
{
    /**
     * @Route("/livreor", name="livre_or")
     */
    public function index()
    {
        return $this->render('livre_or/index.html.twig', [
            'controller_name' => 'LivreOrController',
        ]);
    }
}
