<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'form-input email-input',
                    'placeholder' => 'Votre adresse email',
                    'title' => 'Nous vous contacterons sur cette adresse'
                )
            ))
            ->add('objet', TextType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'form-input objet-input',
                    'placeholder' => 'Objet'
                )
            ))
            ->add('contenu', TextareaType::class, array(
                'label'  => false,
                'attr' => array(
                    'class' => 'form-input contenu-input',
                    'placeholder' => 'Contenu',
                    'rows' => '10'
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
