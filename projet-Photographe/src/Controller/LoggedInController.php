<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class LoggedInController extends AbstractController
{
    /**
     * @Route("/logged/in", name="logged_in")
     */
    public function index()
    {
        $user = $this->getUser()->getPrenom();
        return $this->render('logged_in/index.html.twig', [
            'User' => $user,
        ]);
    }
}
