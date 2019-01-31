<?php

namespace App\Controller;

use App\Entity\SitePhoto;
use App\Entity\SiteText;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
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






        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController', 'presentation' => $presentation,
            'pro' => $pro, 'part' => $part, 'entreprise' => $entreprise, 'produit' => $produit, 'immobilier' => $immobilier,
            'evenementpro' => $evenementpro, 'evenement' => $evenement, 'workshop' => $workshop, 'studio' => $studio,
            'animaux' => $animaux , 'charme' => $charme, 'lifestyle' => $lifestyle
        ]);
    }
}
