<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LogOutController extends AbstractController
{
    /**
     * @Route("/logout", name="log_out")
     */
    public function index()
    {
        return $this->render('log_out/index.html.twig', [
            'controller_name' => 'LogOutController',
        ]);
    }
}
