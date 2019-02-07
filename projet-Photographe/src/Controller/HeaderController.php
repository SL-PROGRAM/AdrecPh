<?php

namespace App\Controller;

use App\Repository\GaleryRepository;
use App\Repository\SitePhotoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HeaderController extends AbstractController
{
    /**
     * @Route("/header", name="header")
     */
    public function index(GaleryRepository $galeryRepository, SitePhotoRepository $sitePhotoRepository )
    {
        $galeries = $galeryRepository->findAll();
        $sitePhoto = $sitePhotoRepository->findAll();


        return $this->render('header/index.html.twig', [
            'galeries' => $galeries,
            'sitePhoto' => $sitePhoto
        ]);
    }
}
