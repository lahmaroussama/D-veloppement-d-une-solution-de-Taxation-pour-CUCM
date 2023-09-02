<?php

namespace App\Form;

use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',TextType::class, array(
                'label' => 'email ',
                'attr' => array(
                    'placeholder' => 'adress mail'
                )
           ))
            ->add('first_name',TextType::class, array(
                'label' => 'first_name ',
                'attr' => array(
                    'placeholder' => 'first_name'
                )
           ))
            ->add('last_name',TextType::class, array(
                'label' => 'last_name ',
                'attr' => array(
                    'placeholder' => 'last_name'
                )
           ))
           ->add('roles', ChoiceType::class, [
            'multiple' => true,
            'choices'  => [
                'Utilisateur' => 'ROLE_USER',
                'Admin' => 'ROLE_ADMIN',                   
            ],
 
            ])
           ->add('image',FileType::class,[
            'mapped' => false
        ])
            ->add('numero',TextType::class, array(
                'label' => 'numero ',
                'attr' => array(
                    'placeholder' => 'numero'
                )
           ))
           
           
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                        
                    ]),
                    
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Admin::class,
        ]);
    }
}
