<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    public function index()
    {
        $user = $this->getUser();
        if($user == null){
            $username = "invité";
        }else{
            $username = $this->getUser()->getUserName();

        }

        return $this->render('galerie/index.html.twig', [
            'user' => $username,
        ]);
    }
}
