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
            ->add('typeSportMarche', CheckboxType::class, array(
                    'label'  => "Marche",
                    'attr' => array(
                        'class' => 'checkbox-container'
                    ),
                    'required' => false
                )
            )
            ->add('typeSportCourse', CheckboxType::class, array(
                    'label'  => "Course à pied",
                    'attr' => array(
                        'class' => 'checkbox-container'
                    ),
                    'required' => false
                )
            )
            ->add('typeSportVelo', CheckboxType::class, array(
                    'label'  => "Vélo de route",
                    'attr' => array(
                        'class' => 'checkbox-container'
                    ),
                    'required' => false
                )
            )
            ->add('typeSportVTT', CheckboxType::class, array(
                    'label'  => "VTT",
                    'attr' => array(
                        'class' => 'checkbox-container'
                    ),
                    'required' => false
                )
            )
            ->add('typeSportAutre', CheckboxType::class, array(
                    'label'  => "Autre",
                    'attr' => array(
                        'class' => 'checkbox-container'
                    ),
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
