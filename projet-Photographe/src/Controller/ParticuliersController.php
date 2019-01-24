<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
     */


    public function contactAction(Request $request)
    {

//        $helper = $this->container->get('oneup_uploader.templating.uploader_helper');
//        $endpoint = $helper->endpoint('gallery');
//

        return $this->render('particuliers/index.html.twig', [

        ]);
    }
}
