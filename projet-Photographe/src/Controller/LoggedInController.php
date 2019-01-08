<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoggedInController extends AbstractController
{
    /**
     * @Route("/logged/in", name="logged_in")
     */
    public function index()
    {
        return $this->render('logged_in/index.html.twig', [
            'controller_name' => 'LoggedInController',
        ]);
    }
}
