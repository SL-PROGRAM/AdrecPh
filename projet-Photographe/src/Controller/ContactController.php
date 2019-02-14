<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\AppMailer;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, AppMailer $mailer)
    {

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dump($data);

            $mailer->send('Contact Client',
                'admin@admin.com',
                'mail/newContact.html.twig',
                $data);

            $this->addFlash('success', 'Votre messange a bien été envoyé');

            return $this->redirectToRoute('contact');
        }

//        if ($form->isSubmitted() && $form->isValid()) {
//            $this->getDoctrine()->getManager()->flush();
//
//            return $this->redirectToRoute('article_index', [
//                'id' => $article->getId(),
//            ]);
//        }
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView(),

        ]);
    }
}
