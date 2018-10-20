<?php

namespace App\Form;

use App\Entity\Path;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            ->add('pathLocation',HiddenType::class)
            ->add('distance',    HiddenType::class)
            ->add('titre',       TextType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'titre-input',
                    'placeholder' => 'Donnez un titre à ce parcours'
                )
            ))
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
            ->add('description', TextareaType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'description-input',
                    'placeholder' => 'Ajoutez une description',
                    'rows' => '5'
                ),
                'required' => false
            ))
            ->add('image', FileType::class, array(
                'label' => false,
                'required' => false
            ))
            ->add('autre_filtre', ChoiceType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'checkbox-container'
                ),
                'choices'  => array(
                    'Détente' => "detente",
                    'Sportif' => "sportif",
                    'Dénivelé important' => "denivele",
                    'Beau paysage' => "paysage",
                    'En mauvais état' => "mauvais etat"
                ),
                'expanded' => true,
                'multiple' => true,
                'required' => false
            ))
            ->add('slug',        HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Path::class,
        ]);
    }
}
