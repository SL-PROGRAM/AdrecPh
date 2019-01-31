<?php

namespace App\Controller;

use App\Entity\Galery;
use App\Entity\Photo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use App\EventListener\UploadListener;
use App\Controller\OneUpUploader\Naming;
use App\Form;


class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
     */


    public function contactAction(Request $request)
    {

        $form = ParticuliersController::createGaleries( $request);

//        $listGaleries = ParticuliersController::




        return $this->render('particuliers/index.html.twig', [
            'form' => $form->createView(),

        ]);
    }




    public function createGaleries(Request $request){
        $Galery = new Galery();

        $form= $this->createForm(Form\GaleryType::class, $Galery);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Galery);
            $entityManager->flush();
            return $this->redirectToRoute('particuliers');
        }

        return $form;
    }

    public function getListGaleries(){
            $listGaleries = [];
            while(){

            }
    }

}
