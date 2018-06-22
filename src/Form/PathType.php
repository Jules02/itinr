<?php

namespace App\Form;

use App\Entity\Path;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PathType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('path',        HiddenType::class)
            ->add('placeId',     HiddenType::class)
            ->add('titre',       TextType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'titre-input',
                    'placeholder' => 'Donnez un titre à ce parcours'
                )
            ))
            ->add('typeSport', ChoiceType::class, array(
                    'label'  => false,
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
            ->add('description', TextareaType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'description-input',
                    'placeholder' => 'Ajoutez une description',
                    'rows' => '5'
                ),
                'required' => false
            ))
            ->add('image',       TextType::class, array(
                'required' => false
            ))
            ->add('note',        ChoiceType::class, array(
                'label'  => false,
                'choices'  => array(
                    '1' => "1",
                    '2' => "2",
                    '3' => "3",
                    '4' => "4",
                    '5' => "5"
                ),
                'expanded' => true,
                'multiple' => false,
                'required' => false
            ))
            ->add('autre_filtre',TextType::class, array(
                'required' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Path::class,
        ]);
    }
}
