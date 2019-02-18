<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Service\AppMailer;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Organigrame;
use App\Entity\SitePhoto;
use App\Entity\SiteText;
use App\Entity\Photo;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfessionelsController extends AbstractController
{
    /**
     * @Route("/professionels", name="professionels")
     */
    public function index()
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
            $pageText[] = $value;
        }
        ksort($pagePhoto);

        return $this->render('professionels/index.html.twig', [
            'Photo' => $pagePhoto,
            'Text' => $pageText,
        ]);


    }

    /**
     * @Route("/professionels/presentation-{id}", name="professionels_presentation")
     */
    public function entreprise($id, Request $request, AppMailer $mailer)
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

        if ($form->isSubmitted() && $form->isValid()) {
            $presta = $pagePhoto[$id];
            $titre = $presta[0]->getTitre();
            $data = $form->getData();
            $data["Titre"] = $titre;
            dump($data);

            $mailer->send('Contact Client',
                'admin@admin.com',
                'mail/newContactPrestation.html.twig',
                $data);

            $mailer->send('Contact Photographe',
                $data['email'],
                'mail/newContactClient.html.twig',
                $data);

            $this->addFlash('success', 'Votre messange a bien été envoyé');

            return $this->redirectToRoute('contact');
        }


        return $this->render('professionels/detail.html.twig', [
            'Photo' => $pagePhoto,
            'Text' => $pageText,
            'hook' => $id,
            'form' => $form->createView()
        ]);
    }

}
