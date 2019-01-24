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

        $presentation = $text->findOneBy(['Titre' => 'Presentation']);
        $pro = $text->findOneBy(['Titre' => 'Espace Professionnel']);
        $part = $text->findOneBy(['Titre' => 'Espace Particulier']);


        $photo = $this->getDoctrine()->getRepository(SitePhoto::class);

        $entreprise = $photo->findOneBy(['Titre' => 'Entreprise']);
        $produit = $photo->findOneBy(['Titre' => 'Packshot']);
        $immobilier = $photo->findOneBy(['Titre' => 'Immobilier']);
        $evenementpro = $photo->findOneBy(['Titre' => 'Couverture Evenementielle']);
        $evenement = $photo->findOneBy(['Titre' => 'Evenement']);
        $workshop = $photo->findOneBy(['Titre' => 'Workshop']);
        $studio = $photo->findOneBy(['Titre' => 'Studio']);
        $animaux = $photo->findOneBy(['Titre' => 'Animaux']);
        $charme = $photo->findOneBy(['Titre' => 'Charme']);
        $lifestyle = $photo->findOneBy(['Titre' => 'Lifestyle']);






        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController', 'presentation' => $presentation,
            'pro' => $pro, 'part' => $part, 'entreprise' => $entreprise, 'produit' => $produit, 'immobilier' => $immobilier,
            'evenementpro' => $evenementpro, 'evenement' => $evenement, 'workshop' => $workshop, 'studio' => $studio,
            'animaux' => $animaux , 'charme' => $charme, 'lifestyle' => $lifestyle
        ]);
    }
}