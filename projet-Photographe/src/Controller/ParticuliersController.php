<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use App\EventListener\UploadListener;
use App\Controller\OneUpUploader\Naming;



class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
     */


    public function contactAction(Request $request)
    {

        return $this->render('particuliers/index.html.twig', [

        ]);
    }


}
