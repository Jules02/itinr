<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChercherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('placeId', TextType::class, array(
                    'label'  => false,
                    'attr' => array(
                        'class' => 'placeId-input-none'
                    )
            ))
            ->add('gps', ButtonType::class, array(
                    'label'  => false,
                    'attr' => array(
                        'class' => 'gps-btn-none'
                    )
            ))
            ->add('typeSport', ChoiceType::class, array(
                    'label'  => false,
                    'attr' => array(
                        'class' => 'typeSport-input'
                    ),
                    'choices'  => array(
                        'Marche' => "marche",
                        'Course à pied' => "course",
                        'Vélo de route' => "veloroute",
                        'VTT' => "vtt",
                        'Autre' => "autre"
                    ),
                    'expanded' => true,
                    'multiple' => false
                )
            )
            ->add('noteMinimale', RadioType::class)
            ->add('filtres', CheckboxType::class)
            ->add('trier')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
