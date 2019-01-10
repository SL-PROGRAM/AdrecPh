<?php
namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Validator\Constraints\DateTime;

use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\InMemoryUserProvider;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use App\Form;



class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function newPost(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)

        $User = new User();
        $form = $this->createForm(Form\ParticulierType::class, $User);


        $User->setRoles(['ROLE_USER']);
        $User->setDateInscription(new \DateTime('now'));




        $defaultEncoder = new MessageDigestPasswordEncoder('sha512', true, 5000);
       // $weakEncoder = new MessageDigestPasswordEncoder('md5', true, 1);

        $encoders = array(
            User::class       => $defaultEncoder,

        );


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password = $User->getPassword();
            $encoderFactory = new EncoderFactory($encoders);
            $encoder = $encoderFactory->getEncoder($User);
            $encodedPassword = $encoder->encodePassword($password, $User->getSalt());
            $User->setPassword($encodedPassword);
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $User = $form->getData();
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($User);
            $entityManager->flush();
            return $this->redirectToRoute('accueil');
        }
        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
