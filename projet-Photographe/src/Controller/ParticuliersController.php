<?php

namespace App\Controller;

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


class ParticuliersController extends AbstractController
{
    /**
     * @Route("/particuliers", name="particuliers")
     */

    public function index(){


        $text = $this->getDoctrine()->getRepository(SiteText::class);

        $presentation = $text->findOneBy(['id' => '1']);
        $pro = $text->findOneBy(['id' => '2']);
        $part = $text->findOneBy(['id' => '3']);


        $photo = $this->getDoctrine()->getRepository(SitePhoto::class);

        $entreprise = $photo->findOneBy(['id' => '3']);
        $produit = $photo->findOneBy(['id' => '4']);
        $immobilier = $photo->findOneBy(['id' => '5']);
        $evenementpro = $photo->findOneBy(['id' => '6']);
        $evenement = $photo->findOneBy(['id' => '7']);
        $workshop = $photo->findOneBy(['id' => '8']);
        $studio = $photo->findOneBy(['id' => '9']);
        $animaux = $photo->findOneBy(['id' => '10']);
        $charme = $photo->findOneBy(['id' => '11']);
        $lifestyle = $photo->findOneBy(['id' => '12']);




        return $this->render('particuliers/index.html.twig', [
            'controller_name' => 'AccueilController', 'presentation' => $presentation,
            'pro' => $pro, 'part' => $part, 'entreprise' => $entreprise, 'produit' => $produit, 'immobilier' => $immobilier,
            'evenementpro' => $evenementpro, 'evenement' => $evenement, 'workshop' => $workshop, 'studio' => $studio,
            'animaux' => $animaux , 'charme' => $charme, 'lifestyle' => $lifestyle,
        ]);


    }

    /**
     * @Route("/particuliers/Evenement", name="particuliers_event")
     */
    public function event()
    {



        return $this->render('particuliers/detail.html.twig', [
                'bob' => 'aaa'
        ]);
    }

    /**
     * @Route("/particuliers/Workshop", name="particuliers_workshop")
     */
    public function workshop()
    {



        return $this->render('particuliers/detail.html.twig', [
            'bob' => 'bbb'

        ]);
    }


    /**
     * @Route("/particuliers/Lifestyle", name="particuliers_lifestyle")
     */
    public function lifestyle(Request $request)
    {



        return $this->render('particuliers/detail.html.twig', [
            'bob' => 'ccc'

        ]);
    }

    /**
     * @Route("/particuliers/Charme", name="particuliers_charme")
     */
    public function charme(Request $request)
    {



        return $this->render('particuliers/detail.html.twig', [
            'bob' => 'ddd'

        ]);
    }

    /**
     * @Route("/particuliers/Animaux", name="particuliers_animaux")
     */
    public function animaux(Request $request)
    {



        return $this->render('particuliers/detail.html.twig', [
            'bob' => 'eee'

        ]);
    }

    /**
     * @Route("/particuliers/Studio", name="particuliers_sudio")
     */
    public function studio(Request $request)
    {



        return $this->render('particuliers/detail.html.twig', [
            'bob' => 'fff'

        ]);
    }


}
