<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BackOfficePhotoController extends AbstractController
{
    /**
     * @Route("/back/office/photo", name="back_office_photo")
     */
    public function index()
    {
        return $this->render('back_office_photo/index.html.twig', [
            'controller_name' => 'BackOfficePhotoController',
        ]);
    }
}
