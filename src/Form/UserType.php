<?php

namespace App\Form;

use App\Entity\LoyaltyCard;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class)
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'ROLE_ADMIN',
                    'User' => 'ROLE_USER',
                ],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('date_create', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de création',
            ])
            ->add('deletedAt', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de suppression',
                'required' => false,
            ])
            ->add('expiredAt', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date d expération',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
