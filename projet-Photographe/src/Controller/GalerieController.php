<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Galery;
use App\Entity\LienPhotoImage;
use App\Entity\Photo;
use App\Form\CommandeType;
use App\Form\ContactType;
use App\Form\SelectorType;
use App\Repository\CommandeRepository;
use App\Repository\FormatRepository;
use App\Repository\GaleryRepository;
use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class GalerieController extends AbstractController
{

//    public function index(PhotoRepository $photoRepository, GaleryRepository $galeryRepository, FormatRepository $formatRepository)
//    {
//        $photos = $photoRepository->findAll();
//        $galeries = $galeryRepository->findAll();
//        $galerie = $galeryRepository->findAll();
//        $format = $formatRepository->findAll();
//
//        $user = $this->getUser();
//        if($user == null){
//            $username = "invité";
//        }else{
//            $username = $this->getUser()->getUserName();
//        }
//
//        return $this->render('galerie/index.html.twig', [
//            'user' => $username,
//            'photos' => $photos,
//            'galeries' => $galeries,
//            'galerie' => $galerie,
//        ]);
//    }

    /**
     * @Route("/galerie/galery-{id}", name="galerie_image" , methods={"GET","POST"})
     */
    public function galery($id, PhotoRepository $photoRepository, GaleryRepository $galeryRepository, FormatRepository $formatRepository, CommandeRepository $commandeRepository , Request $request)
    {
        $user = $this->getUser();
        if($user == null){
            $username = "invité";
        }else{
            $username = $this->getUser()->getUserName();

        }

        $format = $formatRepository->findAll();

        $galeries = $galeryRepository->findAll();
        /** @var Galery $galerie */
        $galerie = $galeryRepository->findOneBy([
            'id' => $id
        ]);
        $photos = $photoRepository->findBy(['galery' => $galerie]);
        $commande = $commandeRepository->findOneBy(['User' => $user,
                                                    'Statut' => 0
            ]);

        dump($galerie);
        if ($commande == null ){
            $commande = new Commande();

        }


        /** @var Photo $photo */
        foreach ($galerie->getPhotos() as $photo) {
            $lien = new LienPhotoImage();
            $lien->setPhoto($photo)
                ->setQuantity(0);
            $commande->addLienPhotoImage($lien);
        }


        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $commande->setStatut(0)
                ->setDate(new \DateTime())
                ->setUser($user);


            foreach ($commande->getLienPhotoImages() as $lien) {
                if ($lien->getFormat() == null){
                    $commande->removeLienPhotoImage($lien);

                }

            }

            $entityManager->persist($commande);

            $entityManager->flush();



            return $this->redirectToRoute('gestion_commande', ['id' => $commande->getId()]);
        }


        dump($form->createView());
        return $this->render('galerie/index.html.twig', [
            'User' => $user,
            'photos' => $photos,
            'galeries' => $galeries,
            'galerie' => $galerie,
            'format' => $format,
            'form' => $form->createView()
        ]);
    }
}
