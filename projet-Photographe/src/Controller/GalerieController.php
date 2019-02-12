<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Galery;
use App\Entity\LienPhotoImage;
use App\Entity\Photo;
use App\Form\CommandeType;
use App\Form\ContactType;
use App\Form\SelectorType;
use App\Repository\FormatRepository;
use App\Repository\GaleryRepository;
use App\Repository\PhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class GalerieController extends AbstractController
{

    public function index(PhotoRepository $photoRepository, GaleryRepository $galeryRepository, FormatRepository $formatRepository)
    {
        $photos = $photoRepository->findAll();
        $galeries = $galeryRepository->findAll();
        $galerie = $galeryRepository->findAll();
        $format = $formatRepository->findAll();

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
     * @Route("/galerie/galery-{id}", name="galerie_image" , methods={"GET","POST"})
     */
    public function galery($id, PhotoRepository $photoRepository, GaleryRepository $galeryRepository, FormatRepository $formatRepository, Request $request)
    {
        $user = $this->getUser();
        if($user == null){
            $username = "invité";
        }else{
            $username = $this->getUser()->getUserName();

        }
        $photos = $photoRepository->findAll();
        $format = $formatRepository->findAll();

        $galeries = $galeryRepository->findAll();
        /** @var Galery $galerie */
        $galerie = $galeryRepository->findOneBy([
            'id' => $id
        ]);

        $commande = new Commande();

        /** @var Photo $photo */
        foreach ($galerie->getPhotos() as $photo) {
            $lien = new LienPhotoImage();
            $lien->setPhoto($photo);
            $commande->addLienPhotoImage($lien);
        }


        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $commande->setStatut(0)
                ->setDate(new \DateTime())
                ->setUser($user);

            $entityManager->persist($commande);

            $entityManager->flush();



            return $this->redirectToRoute('commande');
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
