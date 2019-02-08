<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 07/02/19
 * Time: 11:30
 */

namespace App\Form;


use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ContactType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('token', RadioType::class, [
                'value' => 'Particulier',
                'label' => 'form.contact.Particulier',
            ])
            ->add('token2', RadioType::class, [
                'value' => 'Professionnel',
                'label' => 'form.contact.Professionnel',
            ])

            ->add('Prenom', TextType::class, [
                'label' => 'form.contact.prenom',

            ])
            ->add('Nom', TextType::class, [
        'label' => 'form.contact.prenom',
            ])
            ->add('Tel', TelType::class, [
        'label' => 'form.contact.tel',
            ])
            ->add('email', EmailType::class, [
                'label' => 'form.contact.email',
            ])
            ->add('text', TextareaType::class, [
                'label' => 'form.contact.text',
            ])
        ;
    }
}
