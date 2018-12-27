<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestionAdminController extends AbstractController
{
    /**
     * @Route("/gestion/admin", name="gestion_admin")
     */
    public function index()
    {
        return $this->render('gestion_admin/index.html.twig', [
            'controller_name' => 'GestionAdminController',
        ]);
    }
}
