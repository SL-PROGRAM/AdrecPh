<?php

namespace App\Controller;

use App\Repository\GaleryRepository;
use App\Repository\SitePhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FooterController extends AbstractController
{
    /**
     * @Route("/footer", name="footer")
     */
    public function index(GaleryRepository $galeryRepository, SitePhotoRepository $sitePhotoRepository)
    {
        $galeries = $galeryRepository->findAll();
        $sitePhoto = $sitePhotoRepository->findAll();


        return $this->render('footer/index.html.twig', [
            'galeries2' => $galeries,
            'sitePhoto2' => $sitePhoto
        ]);
    }

}
