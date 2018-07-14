<?php

namespace App\Form;

use App\Entity\Berger;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class BergerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('nomcomplet')
            ->add('login')
            ->add('Numpiece')
            ->add('adresse')
            ->add('Tel')
            ->add('password')
            // ->add('isActive')
            // ->add('roles')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Berger::class,
        ]);
    }
}
    