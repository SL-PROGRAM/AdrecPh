<?php

namespace App\Controller;

use App\Entity\LivreDOr;
use App\Form;
use App\Repository\LivreDOrRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class LivreOrController extends AbstractController
{
    /**
     * @Route("/livreor", name="livre_or")
     * @IsGranted("ROLE_USER")
     */
    public function index(Request $request, LivreDOrRepository $livreDOrRepository)
    {
        $livreOr = new LivreDOr();

        $form= $this->createForm(Form\LivreOrType::class, $livreOr);

        $user = $this->getUser();
        $livreOr->setUser($user);

        $nbLivreOr = $livreDOrRepository->findAll();
        $nbLivreOr = sizeof($nbLivreOr);
        $extraitLivreOr = $livreDOrRepository->findOneBy(['id' => rand(1, $nbLivreOr)]);



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($livreOr);
            $entityManager->flush();
            return $this->redirectToRoute('accueil');
        }
        return $this->render('livre_or/index.html.twig', [
            'form' => $form->createView(),
            'livre_or' => $extraitLivreOr,
        ]);
    }
}
