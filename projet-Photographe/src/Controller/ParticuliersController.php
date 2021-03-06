<?php

namespace App\Controller;

use App\Entity\Organigrame;
use App\Entity\Galery;
use App\Entity\Photo;
use App\Entity\SitePhoto;
use App\Entity\SiteText;
use App\Repository\GaleryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use App\EventListener\UploadListener;
use App\Controller\OneUpUploader\Naming;
use App\Form;
use App\Form\ContactType;



class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
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

        return $this->render('particuliers/index.html.twig', [
            'Photo' => $pagePhoto,
            'Text' => $pageText,
        ]);
    }

    /**
     * @Route("/particuliers/presentation-{id}", name="particuliers_presentation")
     */
    public function particuliers($id, Request $request)
    {
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
            $pageText[$value->getHook()] = $value;
        }
        ksort($pagePhoto);

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        return $this->render('professionels/detail.html.twig', [
            'Photo' => $pagePhoto,
            'Text' => $pageText,
            'hook' => $id,
            'form' => $form->createView()

        ]);
    }



}
