<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('surname', TextType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'form-input surname-input',
                    'placeholder' => 'Prénom'
                )
            ))
            ->add('username', TextType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'form-input username-input',
                    'placeholder' => "Nom d'utilisateur"
                )
            ))
            ->add('email', EmailType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'form-input email-input',
                    'placeholder' => 'Adresse email',
                    'title' => 'Nous vous enverrons un email sur cette adresse'
                )
            ))
            ->add('genre', ChoiceType::class, array(
                'label' => false,
                'attr' => array(
                    'class' => 'radio-container',
                    'title' => 'Nous en avons besoin pour votre avatar'
                ),
                'choices'  => array(
                    'Homme' => "homme",
                    'Femme' => "femme",
                    'Autre' => "autre"
                ),
                'data' => '',
                'expanded' => true,
                'multiple' => false
                )
            )
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => "Mot de passe",
                        'class' => 'form-input password-input'
                    )
                ),
                'second_options' => array(
                    'label' => false,
                    'attr' => array(
                        'placeholder' => "Répétez votre mot de passe",
                        'class' => 'form-input password-input password2'
                    )
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}