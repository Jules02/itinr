<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChercherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieu', TextType::class, array(
                    'label'  => false,
                    'attr' => array(
                        'class' => 'placeId-input',
                        'placeholder' => 'Où voulez vous trouver un itinéraire ?'
                    ),
                    'required' => false
            ))
            ->add('placeId', HiddenType::class)
            ->add('typeSport', ChoiceType::class, array(
                    'label'  => false,
                    'placeholder' => false,
                    'attr' => array(
                        'class' => 'radio-container'
                    ),
                    'choices'  => array(
                        'Marche' => "marche",
                        'Course à pied' => "course",
                        'Vélo de route' => "veloroute",
                        'VTT' => "vtt",
                        'Autre' => "autre"
                    ),
                    'expanded' => true,
                    'multiple' => false,
                    'required' => false
                )
            )
            ->add('recherchePrecise', ChercherPrecisType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'recherchePrecise-container'
                ),
                'required' => false
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
