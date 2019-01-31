<?php
namespace App\Controller;


use App\Entity\Adress;
use App\Entity\User;
use App\Form;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\InMemoryUserProvider;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;


class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function newPost(Request $request)
    {

    $Adress = new Adress();

        $form= $this->createForm(Form\AdressType::class, $Adress);

        $user = $this->getUser();
        $Adress->setUser($user);



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Adress);
            $entityManager->flush();
            return $this->redirectToRoute('accueil');
        }
        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
