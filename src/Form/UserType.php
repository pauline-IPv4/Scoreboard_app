<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Length;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options["data"];
        $builder
            ->add('pseudo')
            ->add('email', EmailType::class,[
                'mapped' => false,
                'constraints'=> [
                    new NotNull(['message' => 'Le mail ne peut pas être vide']),
                    new Length(['min' => 4,
                                'minMessage' => 'Le pseudo doit comporter au moins 4 caractères']),
                ]
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Administrateur' => 'ROLE_ADMIN',
                    'Joueur' => 'ROLE_PLAYER',
                    'Arbitre' => 'ROLE_REFEREE',
                    'Utilisateur' => 'ROLE_USER'
                ],
                'multiple' => true,
                'expanded' => true
            ])
            ->add('password', TextType::class, [
                'mapped' => false, 
                'required' => $user->getId() ? false : true 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
