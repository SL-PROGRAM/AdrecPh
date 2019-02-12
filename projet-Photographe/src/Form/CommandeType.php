<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 12/02/19
 * Time: 10:15
 */

namespace App\Form;


use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Entity\Commande;
use App\Entity\Format;

use App\Entity\LienPhotoImage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lienPhotoImages', CollectionType::class,[
                'entry_type' => SelectorType::class,
                'entry_options' => [
                    'label' => false
                ],
            ])
            ->add('commander', SubmitType::class )
            ->add('ajouter au panier', SubmitType::class )



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}