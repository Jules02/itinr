<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChercherPrecisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parAuteur', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'class' => 'recherchePrecis-input'
                )
            ))
            ->add('parTitre', TextType::class, array(
                'label' => false,
                'attr' => array(
                    'class' => 'recherchePrecis-input'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
