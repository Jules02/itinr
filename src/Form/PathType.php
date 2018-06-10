<?php

namespace App\Form;

use App\Entity\Path;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            ->add('titre',       TextType::class)
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
            ->add('description', TextType::class)
            ->add('image',       TextType::class)
            ->add('note',        IntegerType::class)
            ->add('autre_filtre',TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Path::class,
        ]);
    }
}
