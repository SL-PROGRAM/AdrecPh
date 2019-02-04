<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 07/01/19
 * Time: 11:46
 */

namespace App\Form;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ParticulierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
               ->add('nom', TextType::class)
               ->add('prenom', TextType::class)
               ->add('tel', TelType::class)
               ->add('email', EmailType::class)
               ->add('Password', PasswordType::class)
               ->add('save', SubmitType::class, array('label' => 'Create User'));
    }
}

