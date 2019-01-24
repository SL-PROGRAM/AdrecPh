<?php

namespace App\Controller;

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

        $repository = $this->getDoctrine()->getRepository(SiteText::class);

        $presentation = $repository->findOneBy(['Titre' => 'Presentation']);
        $pro = $repository->findOneBy(['Titre' => 'Espace Professionnel']);
        $part = $repository->findOneBy(['Titre' => 'Espace Particulier']);


        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController', 'presentation' => $presentation,
            'pro' => $pro, 'part' => $part
        ]);
    }
}