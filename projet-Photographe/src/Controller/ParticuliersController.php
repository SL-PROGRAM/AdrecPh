<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
     */


    public function contactAction(Request $request)
    {

        return $this->render('particuliers/index.html.twig', [

        ]);
    }
}
