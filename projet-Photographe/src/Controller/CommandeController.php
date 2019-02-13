<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use App\Repository\FormatRepository;
use App\Repository\LienPhotoImageRepository;
use App\Repository\PhotoRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CommandeType;

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
        public function commande(UserRepository $userRepository, LienPhotoImageRepository $lienPhotoImageRepository, CommandeRepository $commandeRepository, PhotoRepository $photoRepository, FormatRepository $formatRepository ,$id, Request $request)
    {
        $user = $this->getUser();
        $commande = $commandeRepository->findOneBy(['id' => $id]);
        $lien = $lienPhotoImageRepository->findBy(['commande' => $id]);
        $photo = $photoRepository->findAll();
        $format = $formatRepository->findAll();


        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $commande->setStatut(0)
                ->setDate(new \DateTime())
                ->setUser($user);


            foreach ($commande->getLienPhotoImages() as $lien) {
                if ($lien->getFormat() == null || $lien->getQuantity() == 0){
                    $commande->removeLienPhotoImage($lien);

                }

            }
            $commande->setStatut(1);
            $entityManager->persist($commande);

            $entityManager->flush();



            return $this->redirectToRoute('gestion_commande', ['id' => $commande->getId()]);
        }

        dump($commande);
        dump($form->createView());
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
            'lien' => $lien,
            'user' => $user,
            'id' => $id,
            'format' => $format,
            'form' => $form->createView()
        ]);
    }
}
