<?php

namespace App\Form;

use App\Entity\Adress;
use App\Entity\StreetType;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom', TextType::class,['label' => 'form.adress.firstName' ])
            ->add('Nom', TextType::class,['label' => 'form.adress.lastName' ])
            ->add('Number', NumberType::class,['label' => 'form.adress.number' ])
            ->add('adress_1', TextType::class,['label' => 'form.adress.adress_1' ])
            ->add('adress_2', TextType::class,['label' => 'form.adress.adress_2' ])
            ->add('CP', NumberType::class,['label' => 'form.adress.cp' ])
            ->add('City', TextType::class,['label' => 'form.adress.city' ])
            ->add('tel', TelType::class,['label' => 'form.adress.tel' ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
