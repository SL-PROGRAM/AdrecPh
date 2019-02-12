<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 12/02/19
 * Time: 09:38
 */

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Format;

use App\Entity\LienPhotoImage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SelectorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Format', EntityType::class,[
                'class' => Format::class,
                'label' => 'Format'
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LienPhotoImage::class,
        ]);
    }
}