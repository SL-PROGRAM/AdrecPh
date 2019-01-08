<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 07/01/19
 * Time: 11:46
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;


class ParticulierForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('tel', TelType::class)
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, array('label' => 'Create User'));
    }
}