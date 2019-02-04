<?php

namespace App\Controller;

use App\Entity\Organigrame;
use App\Entity\SitePhoto;
use App\Entity\SiteText;
use App\Entity\Photo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */


 public function index(){
     $organigrame = $this->getDoctrine()->getRepository(Organigrame::class);
     $sitePhoto = $this->getDoctrine()->getRepository(SitePhoto::class);
     $photo = $this->getDoctrine()->getRepository(Photo::class);
     $text = $this->getDoctrine()->getRepository(SiteText::class);

     $pagelabel = $organigrame->find(1);
     $pagePhotos = $pagelabel->getSitePhotos();
     foreach ($pagePhotos as $key => $value){
         $pagePhoto[$value->getHook()] = [$value, $photo->findby(['id' => $value->getPhoto()]) ];
     }
     ksort($pagePhoto);

     $pageTexts = $pagelabel->getSiteTexts();
     foreach ($pageTexts as $key => $value){
         $pageText[] = $value;
     }
    ksort($pagePhoto);

     return $this->render('accueil/index.html.twig', [
         'Photo' => $pagePhoto,
         'Text' => $pageText,
     ]);
 }
}