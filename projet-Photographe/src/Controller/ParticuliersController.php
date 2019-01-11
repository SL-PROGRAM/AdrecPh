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
        $form = $this->createForm(ContactType::class);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $data = $form->getData();
            $message = \Swift_Message::newInstance()->setSubject($data['subject'])->setFrom($data['email'])->setTo('ton_adresse_email@gmail.com')

                ->setBody($this->renderView('Emails/email_contact.html.twig', array(
                    'firstName' => $data['firstName'],
                    'lastName' => $data['lastName'],
                    'email' => $data['email'],
                    'tel' => $data['tel'],
                    'subject' => $data['subject'],
                    'content' => $data['content']
                )),'text/html');
            $this->get('mailer')->send($message);
            $request->getSession()->getFlashBag()->add('notice', "Votre message a bien été envoyé.");
            return $this->redirect($this->generateUrl('website_contact').'#formulaire_contact');
        }

        return $this->render('particuliers/index.html.twig', [
                'form' => $form->createView(),
        ]);
    }
}
