<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FullsizeController extends AbstractController
{
    /**
     * @Route("/fullsize", name="fullsize")
     */
    public function index()
    {

        $title = $_GET['title'];
        dump($title);

        return $this->render('fullsize/index.html.twig', [
            'path' => $title ,        ]);
    }
}
