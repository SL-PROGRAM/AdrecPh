<?php
namespace App\Controller;
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
        // just setup a fresh $task object (remove the dummy data)
        $User = new User();
        /*$form = $this->createFormBuilder($User)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('tel', TelType::class)
            ->add('email', EmailType::class)
            ->add('Password', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Create User'))
            ->getForm();

*/
        $form= $this->createForm(Form\ParticulierForm::class, $User);
        $User->addRole('ROLE_USER');

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