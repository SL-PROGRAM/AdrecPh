<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BackOfficeTextController extends AbstractController
{
    /**
     * @Route("/back/office/text", name="back_office_text")
     */
    public function index()
    {
        return $this->render('back_office_text/index.html.twig', [
            'controller_name' => 'BackOfficeTextController',
        ]);
    }
}
