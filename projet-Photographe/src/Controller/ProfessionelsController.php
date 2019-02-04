<?php

namespace App\Controller;

use App\Entity\SitePhoto;
use App\Entity\SiteText;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionelsController extends AbstractController
{
    /**
     * @Route("/professionels", name="professionels")
     */
    public function index()
    {


        $text = $this->getDoctrine()->getRepository(SiteText::class);

        $presentation = $text->findOneBy(['id' => '1']);
        $pro = $text->findOneBy(['id' => '2']);
        $part = $text->findOneBy(['id' => '3']);


        $photo = $this->getDoctrine()->getRepository(SitePhoto::class);

        $entreprise = $photo->findOneBy(['id' => '3']);
        $produit = $photo->findOneBy(['id' => '4']);
        $immobilier = $photo->findOneBy(['id' => '5']);
        $evenementpro = $photo->findOneBy(['id' => '6']);
        $evenement = $photo->findOneBy(['id' => '7']);
        $workshop = $photo->findOneBy(['id' => '8']);
        $studio = $photo->findOneBy(['id' => '9']);
        $animaux = $photo->findOneBy(['id' => '10']);
        $charme = $photo->findOneBy(['id' => '11']);
        $lifestyle = $photo->findOneBy(['id' => '12']);


        return $this->render('professionels/index.html.twig', [
            'controller_name' => 'AccueilController', 'presentation' => $presentation,
            'pro' => $pro, 'part' => $part, 'entreprise' => $entreprise, 'produit' => $produit, 'immobilier' => $immobilier,
            'evenementpro' => $evenementpro, 'evenement' => $evenement, 'workshop' => $workshop, 'studio' => $studio,
            'animaux' => $animaux, 'charme' => $charme, 'lifestyle' => $lifestyle,
        ]);


    }

    /**
     * @Route("/professionels/presentation_entreprise", name="professionels_presentation_entreprise")
     */
    public function entreprise()
    {


        return $this->render('professionels/detail.html.twig', [
            'bob' => 'aaa'
        ]);
    }

    /**
     * @Route("/professionels/presentation_produit", name="professionels_presentation_produit")
     */
    public function produit()
    {


        return $this->render('professionels/detail.html.twig', [
            'bob' => 'bbb'

        ]);
    }


    /**
     * @Route("/professionels/immobilier", name="professionels_photo_immobilier")
     */
    public function immobilier()
    {


        return $this->render('professionels/detail.html.twig', [
            'bob' => 'ccc'

        ]);
    }

    /**
     * @Route("/professionels/evenement", name="professionels_event")
     */
    public function event()
    {


        return $this->render('professionels/detail.html.twig', [
            'bob' => 'ddd'

        ]);
    }
}
