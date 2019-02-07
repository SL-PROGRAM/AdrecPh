<?php

namespace App\Controller;

use App\Repository\GaleryRepository;
use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    public function index(PhotoRepository $photoRepository, GaleryRepository $galeryRepository)
    {
        $photos = $photoRepository->findAll();
        $galeries = $galeryRepository->findAll();
        $galerie = $galeryRepository->findAll();


        $user = $this->getUser();
        if($user == null){
            $username = "invité";
        }else{
            $username = $this->getUser()->getUserName();
        }

        return $this->render('galerie/index.html.twig', [
            'user' => $username,
            'photos' => $photos,
            'galeries' => $galeries,
            'galerie' => $galerie,
        ]);
    }

    /**
     * @Route("/galerie/galery-{id}", name="galerie_image")
     */
    public function galery($id, PhotoRepository $photoRepository, GaleryRepository $galeryRepository)
    {
        $user = $this->getUser();
        if($user == null){
            $username = "invité";
        }else{
            $username = $this->getUser()->getUserName();

        }
        $photos = $photoRepository->findAll();
        $galeries = $galeryRepository->findAll();
        $galerie = $galeryRepository->findby([
            'id' => $id
        ]);


        return $this->render('galerie/index.html.twig', [
            'user' => $username,
            'photos' => $photos,
            'galeries' => $galeries,
            'galerie' => $galerie,
        ]);
    }
}
