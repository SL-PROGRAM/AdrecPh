<?php

namespace App\Form;

use App\Entity\Adress;
use App\Entity\StreetType;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\DBAL\Types\TextType;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom')
            ->add('Nom')
            ->add('Number')
            ->add('adress_1')
            ->add('adress_2')
            ->add('CP')
            ->add('City')
            ->add('tel')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
