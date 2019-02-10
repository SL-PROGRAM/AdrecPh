<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use App\Repository\LienPhotoImageRepository;
use App\Repository\PhotoRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(UserRepository $userRepository, LienPhotoImageRepository $lienPhotoImageRepository, CommandeRepository $commandeRepository)
    {
        $user = $this->getUser();
        $commande = $commandeRepository->findBy(['User' => $user->getId()]);
        dump($commande);
        return $this->render('commande/index.html.twig', [
            'user' => $user,
            'commande' => $commande
        ]);
    }

        /**
         * @Route("/commande/{id}", name="gestion_commande")
         */
        public function commande(UserRepository $userRepository, LienPhotoImageRepository $lienPhotoImageRepository, CommandeRepository $commandeRepository, PhotoRepository $photoRepository ,$id)
    {
        $user = $this->getUser();
        $commande = $commandeRepository->findBy(['User' => $user->getId()]);
        $lien = $lienPhotoImageRepository->findBy(['commande' => $id]);
        $photo = $photoRepository->findAll();

        dump($commande);
        dump($lien);
        return $this->render('commande/show.html.twig', [
            'lien' => $lien,
            'user' => $user,
            'id' => $id
        ]);
    }
}
