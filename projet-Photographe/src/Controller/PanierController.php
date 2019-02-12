<?php

namespace App\Controller;

use App\Entity\LienPhotoImage;
use App\Repository\FormatRepository;
use App\Repository\LienPhotoImageRepository;
use App\Repository\PhotoRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Commande;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommandeRepository;
use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints\Date;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(UserRepository $userRepository, LienPhotoImageRepository $lienPhotoImageRepository, CommandeRepository $commandeRepository, PhotoRepository $photoRepository, FormatRepository $formatRepository)
    {

        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande)
        ;

        $form->handleRequest($request);


        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $commande = new Commande();
        $commande->setUser($user)
            ->setStatut(0)
            ->setDate(new \DateTime());
        $em->persist($commande);


        foreach ($form as $key => $value){
            if ("" != $value){
                $photo = $photoRepository->findOneBy(['id' => $key]);
                $format = $formatRepository->findOneBy(['id' => $value]);
                $lienphoto = new LienPhotoImage();
                $lienphoto->setCommande($commande)
                    ->setPhoto($photo)
                    ->setFormat($format);
                $em->persist($lienphoto);

            }

            $em->flush();
            dump($commande);
            $lien = $lienPhotoImageRepository->findBy(['commande' => $commande->getId()]);

        }
        return $this->render('panier/index.html.twig', [
            'lien' => $lien,
            'user' => $user,
            'commande' => $commande
        ]);
    }
}
