<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 14/01/19
 * Time: 15:37
 */

namespace App\Form;

use App\Entity\Adress;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormTypeInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add("prenom")
            ->add('adress', AdressType::class, array('data_class'=>null));
//            ->add('adress', Entity::class);

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
