<?php

namespace App\Controller;

use App\Repository\GaleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    public function index(GaleryRepository $galeryRepository)
    {
        $galeryRepository->findAll();





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

    /**
     * @Route("/galerie", name="galerie_image")
     */
    public function galery()
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
