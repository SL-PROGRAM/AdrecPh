<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 07/02/19
 * Time: 11:30
 */

namespace App\Form;


use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('token', ChoiceType::class, [
                'choices' => [
                    'Particulier' => 'Prticulier',
                    'Professionnel' => 'Professionnel'

                ],
                'expanded' => true,
            ])
//            ->add('token2', RadioType::class, [
//                'value' => 'Professionnel',
//                'label' => 'Professionnel',
//            ])

            ->add('Prenom')
            ->add('Nom')
            ->add('Tel')
            ->add('email')
            ->add('text', TextareaType::class)

        ;
    }
}
